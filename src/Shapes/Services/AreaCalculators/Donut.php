<?php
/**
 * Created by PhpStorm.
 * User: alex311es
 * Date: 24/4/15
 * Time: 23:39
 */

namespace Riplife\Shapes\Services\AreaCalculators;

use Riplife\Shapes\Interfaces\AreaCalculatorInterface;

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
        $radius = new Circle(array('radius' => $data['radius']));
        $radius2 = new Circle(array('radius' => $data['radius2']));

        return abs($radius - $radius2);
    }
}