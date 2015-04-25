<?php

namespace Shapes\AreaCalculators;

use Shapes\Interfaces\AreaCalculatorInterface;

class Donut implements AreaCalculatorInterface {

    /**
     * Calculates the area for a Donut shape.
     *
     * @param array $data
     *   Array of data to calculate the are of the shape.
     *
     * @return double
     *   The area of the shape.
     */
    public function getArea(array $data)
    {
        $radius = (new Circle())->getArea(array('radius' => $data['radius']));
        $radius2 = (new Circle())->getArea(array('radius' => $data['radius2']));

        return abs($radius - $radius2);
    }
}