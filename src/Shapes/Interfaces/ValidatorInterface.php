<?php
/**
 * Created by PhpStorm.
 * User: alex311es
 * Date: 24/4/15
 * Time: 23:11
 */

namespace Riplife\Shapes\Interfaces;


interface ValidatorInterface {

    /**
     * Validates whether or not an input is valid to calculate the
     * area of the shape.
     *
     * @param string $input
     *   The data provided to build the shape and calculate its area.
     *
     * @param int $parameters
     *   Number of parameters expected by the shape.
     *
     * @throws \Riplife\Shapes\Exceptions\ValidationException
     */
    public function validate($input, $parameters);
}