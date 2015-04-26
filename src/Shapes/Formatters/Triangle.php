<?php

namespace Shapes\Formatters;

use Shapes\Interfaces\ShapeInterface;
use Shapes\Interfaces\FormatterInterface;

class Triangle implements FormatterInterface {
    /**
     * {@inheritdoc }
     */
    public function format(ShapeInterface $shape) {

        return sprintf("Triangle with vertex 1 at (%01.2f, %01.2f), vertex 2 at (%01.2f, %01.2f), vertex 3 at (%01.2f, %01.2f). Area: %01.2f m2", $shape->v1x, $shape->v1y, $shape->v2x, $shape->v2y, $shape->v3x, $shape->v3y, $shape->getArea());
    }
}