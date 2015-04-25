<?php

use Shapes\Exceptions as Exceptions;

/**
 * Sample Form
 */
function shapes_form($form, &$form_state) {
    $form = array();

    $form['description'] = array(
        '#type' => 'markup',
        '#markup' => '<p>' . t('For the circle, the numbers are the x and y coordinates of the centre followed by the radius') . '</p><p>' . t('For the triangle it is the x and y coordinates of the three vertices (six numbers in total)') . '</p><p>' . t('For the donut it is the x and y of the centre followed by the two radiuses') . '</p>',
    );

    $shapes = shapes_get_shapes();

    $form['shape'] = array(
        '#type' => 'select',
        '#title' => t('Shape'),
        '#description' => t('Choose a shape'),
        '#options' => drupal_map_assoc($shapes),
        '#required' => TRUE,
    );

    $form['coordinates'] = array(
        '#type' => 'textfield',
        '#title' => t('Coordinates'),
        '#description' => t('Write here the coordinates of the shape'),
        '#required' => TRUE,
        '#size' => '60',
    );

    $form['submit'] = array(
        '#type' => 'submit',
        '#value' => t('Calculate Area'),
    );

    return $form;
}

function shapes_form_validate($form, &$form_state) {

    // Sanitize input.
    $input = strip_tags(trim($form_state['values']['coordinates']));
    $shape = $form_state['values']['shape'];

    // We only want to act only if we have valid information.
    if (empty($shape) || empty($input)) {
        return;
    }

    $config = array(
        'class' => variable_get("shapes_class_$shape", 'Shapes\Shapes\\' . ucfirst($shape)),
        'validator' => variable_get("shapes_validator_$shape", 'Shapes\Services\Validator'),
        'calculator' => variable_get("shapes_calculator_$shape", 'Shapes\AreaCalculators\\' . ucfirst($shape)),
        'formatter' => variable_get("shapes_formatter_$shape", 'Shapes\Formatters\\' . ucfirst($shape)),
    );

    $field = NULL;

    try {
        $object = Shapes\ShapesFactory::factory($config);
        $object->validate($input);

        $form_state['values']['object'] = $object;

    }
    catch (Exceptions\UndefinedShapeException $e) {
        $field = 'shape';
        $message = t('Unrecognised shape type, please try again.');
    }
    catch (Exceptions\ValidationException $e) {

        switch ($e->getCode()) {
            case Exceptions\ValidationException::INVALID_PARAMETERS_NUMBER:
                $field = 'coordinates';
                $message = t('Incorrect number of parameters provided.');
                break;

            case Exceptions\ValidationException::INVALID_PARAMETER_TYPE:
                $field = 'coordinates';
                $message = t('The format of the parameter %value is not correct, please try again.', array('%value' => $e->getValue()));
                break;
        }
    }
    catch (\Exception $e) {
        $message = t('Something went wrong (technically) please try again.');
    }

    if (isset($message)) {
        form_set_error($field, $message);
    }
}

function shapes_form_submit($form, &$form_state) {
    /** @var Shapes\Shapes\Shape $object */
    $object = $form_state['values']['object'];
    $message = $object->format();

    drupal_set_message($message);
}