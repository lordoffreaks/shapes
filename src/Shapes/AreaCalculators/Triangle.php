<?php

namespace Shapes\AreaCalculators;

use Shapes\Interfaces\AreaCalculatorInterface;
use Shapes\Interfaces\ShapeInterface;

class Triangle implements AreaCalculatorInterface {

    /**
     * {@inheritdoc }
     */
    public function getArea(ShapeInterface $shape)
    {
        $sum = 0;
        $sum += $shape->v1x * ($shape->v2y - $shape->v3y);
        $sum += $shape->v2x * ($shape->v3y - $shape->v1y);
        $sum += $shape->v3x * ($shape->v1y - $shape->v2y);

        return $sum / 2;
    }
}