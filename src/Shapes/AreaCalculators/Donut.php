<?php

namespace Shapes\AreaCalculators;

use Shapes\Interfaces\AreaCalculatorInterface;
use Shapes\Interfaces\ShapeInterface;

class Donut implements AreaCalculatorInterface {

    /**
     * {@inheritdoc }
     */
    public function getArea(ShapeInterface $shape)
    {
        $shape2 = clone $shape;
        $shape2->radius = $shape->radius2;

        $radius = (new Circle())->getArea($shape);
        $radius2 = (new Circle())->getArea($shape2);

        return abs($radius - $radius2);
    }
}