<?php
/**
 * Created by PhpStorm.
 * User: alex311es
 * Date: 24/4/15
 * Time: 23:12
 */

namespace Riplife\Shapes\Services;

use Riplife\Shapes\Interfaces\ValidatorInterface;
use Riplife\Shapes\Exceptions\ValidationException;


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
     * @throws \Riplife\Shapes\Exceptions\ValidationException
     */
    public function validate($data, $parameters)
    {
        if (count($data) !== $parameters) {
            throw new ValidationException('');
        }

        foreach ($data as $number) {
            if (!is_double($number)) {
                throw new ValidationException('', 0, NULL, $number);
            }
        }
    }

}