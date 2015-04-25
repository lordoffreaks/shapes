<?php
/**
 * Created by PhpStorm.
 * User: alex311es
 * Date: 24/4/15
 * Time: 23:12
 */

namespace Shapes\Services;

use Shapes\Interfaces\ValidatorInterface;
use Shapes\Exceptions\ValidationException;


class Validator implements ValidatorInterface
{
    /**
     * Validates whether or not an input is valid to calculate the
     * area of the shape.
     *
     * @param array $data
     *   The data provided to build the shape and calculate its area.
     *
     * @param int $parameters
     *   Number of parameters expected by the shape.
     *
     * @throws \Shapes\Exceptions\ValidationException
     */
    public function validate($data, $parameters)
    {
        if (count($data) !== $parameters) {
            throw new ValidationException('', ValidationException::INVALID_PARAMETERS_NUMBER);
        }

        foreach ($data as $number) {
            if (!is_double($number)) {
                throw new ValidationException('', ValidationException::INVALID_PARAMETER_TYPE, NULL, $number);
            }
        }
    }

}