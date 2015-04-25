<?php

namespace Shapes\AreaCalculators;

use Shapes\Interfaces\AreaCalculatorInterface;

class Triangle implements AreaCalculatorInterface {

    /**
     * Calculates the area for a Triangle shape.
     *
     * @param array $data
     *   Array of data to calculate the are of the shape.
     *
     * @return double
     *   The area of the shape.
     */
    public function getArea(array $data)
    {
        $sum = 0;
        $sum += $data['v1x'] * ($data['v2y'] - $data['v3y']);
        $sum += $data['v2x'] * ($data['v3y'] - $data['v1y']);
        $sum += $data['v3x'] * ($data['v1y'] - $data['v2y']);

        return $sum / 2;
    }
}