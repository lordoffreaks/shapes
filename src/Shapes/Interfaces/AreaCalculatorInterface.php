<?php
/**
 * @file
 * AreaCalculatorInterface.
 */

namespace Riplife\Shapes\Interfaces;

interface AreaCalculatorInterface
{

    /**
     * Calculates the area for a given shape.
     *
     * @param array $data
     *   Array of data to calculate the are of the shape.
     *
     * @return double
     *   The area of the shape.
     */
    public function getArea(array $data);
}