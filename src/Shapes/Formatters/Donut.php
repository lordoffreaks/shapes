<?php

namespace Shapes\Formatters;

use Shapes\Interfaces\FormatterInterface;

class Donut implements FormatterInterface {
    /**
     * Formats a string with the result of the operation.
     *
     * @param array $data
     *   The data provided to build the shape and calculate its area.
     *
     * @return string
     *   A formatted string.
     */
    public function format($data) {

        if ($data['radius2'] > $data['radius']) {
            $bigRadius = $data['radius2'];
            $smallRadius = $data['radius'];
        }
        else {
            $bigRadius = $data['radius'];
            $smallRadius = $data['radius2'];
        }

        return sprintf("Donut with centre at (%01.2f, %01.2f), small radius %01.2f and big radius %01.2f. Area: %01.2f m2", $data['x'], $data['y'], $smallRadius, $bigRadius, $data['area']);
    }
}