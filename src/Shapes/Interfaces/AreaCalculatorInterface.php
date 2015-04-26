<?php
/**
 * @file
 * AreaCalculatorInterface.
 */

namespace Shapes\Interfaces;

use Shapes\Interfaces\ShapeInterface;

interface AreaCalculatorInterface
{

    /**
     * Calculates the area for a given shape.
     *
     * @param ShapeInterface $shape
     *   The object which date will be calculated.
     *
     * @return double
     *   The area of the shape.
     */
    public function getArea(ShapeInterface $shape);
}