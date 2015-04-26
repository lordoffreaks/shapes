<?php

namespace Shapes\AreaCalculators;

use Shapes\Interfaces\AreaCalculatorInterface;
use Shapes\Interfaces\ShapeInterface;

class Circle implements AreaCalculatorInterface {

    /**
     * {@inheritdoc }
     */
    public function getArea(ShapeInterface $shape)
    {
        return 2 * M_PI * $shape->radius;
    }
}