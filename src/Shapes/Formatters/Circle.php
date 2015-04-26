<?php

namespace Shapes\Formatters;

use Shapes\Interfaces\ShapeInterface;
use Shapes\Interfaces\FormatterInterface;

class Circle implements FormatterInterface {
    /**
     * {@inheritdoc }
     */
    public function format(ShapeInterface $shape) {
        return sprintf("Circle with centre at (%01.2f, %01.2f) and radius %01.2f. Area: %01.2f m2", $shape->x, $shape->y, $shape->radius, $shape->getArea());
    }
}