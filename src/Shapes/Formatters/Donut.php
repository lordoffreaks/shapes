<?php

namespace Shapes\Formatters;

use Shapes\Interfaces\ShapeInterface;
use Shapes\Interfaces\FormatterInterface;

class Donut implements FormatterInterface {
    /**
     * {@inheritdoc }
     */
    public function format(ShapeInterface $shape) {

        if ($shape->radius2 > $shape->radius) {
            $bigRadius = $shape->radius2;
            $smallRadius = $shape->radius;
        }
        else {
            $bigRadius = $shape->radius;
            $smallRadius = $shape->radius2;
        }

        return sprintf("Donut with centre at (%01.2f, %01.2f), small radius %01.2f and big radius %01.2f. Area: %01.2f m2", $shape->x, $shape->y, $smallRadius, $bigRadius, $shape->getArea());
    }
}