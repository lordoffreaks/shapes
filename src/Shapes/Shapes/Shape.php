<?php
/**
 * @file
 * Circle.
 */

namespace Riplife\Shapes\Shapes;

use Riplife\Shapes\Interfaces\ShapeInterface;
use Riplife\Shapes\Interfaces\ValidatorInterface;

abstract class Shape
{
    /**
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * @var AreaCalculatorInterface
     */
    protected $calculator;

    /**
     * @var FormatterInterface
     */
    protected $formatter;

    /**
     * @var int
     */
    protected $parameters;

    /**
     * @var array $input
     */
    protected $input;

    public function __construct(ValidatorInterface $validator, AreaCalculatorInterface $calculator, FormatterInterface $formatter, $parameters)
    {
        $this->validator = $validator;
        $this->calculator = $calculator;
        $this->formatter = $formatter;
        $this->parameters = $parameters;
    }

    /**
     * Sanitize and
     *
     * @param string $input
     *   The data provided to build the shape and calculate its area.
     *
     * @return ShapeInterface
     *   An instance of the object.
     *
     */
    public function beforeValidate($input) {
        $secure_input = strip_tags(trim($input));
        $data = implode(' ', $secure_input);
        $this->setInput($data);

        return $this;
    }

    /**
     * Validates whether or not an input is valid to calculate the
     * area of the shape.
     *
     * @param string $input
     *   The data provided to build the shape and calculate its area.
     *
     * @throws \Riplife\Shapes\Exceptions\ValidationException
     */
    public function validate($input) {
        $this->beforeValidate($input);
        $this->validator->validate($this->getInput(), $this->parameters);
        $this->setData();
    }

    /**
     * @return array
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @param array $input
     */
    public function setInput($input)
    {
        $this->input = $input;
    }

    /**
     * Helper function to set the object data.
     */
    abstract function setData();
}