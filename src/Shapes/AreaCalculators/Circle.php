<?php

namespace Shapes\AreaCalculators;

use Shapes\Interfaces\AreaCalculatorInterface;

class Circle implements AreaCalculatorInterface {

    /**
     * Calculates the area for a Circle shape.
     *
     * @param array $data
     *   Array of data to calculate the are of the shape.
     *
     * @return double
     *   The area of the shape.
     */
    public function getArea(array $data)
    {
        return 2 * M_PI * $data['radius'];
    }
}