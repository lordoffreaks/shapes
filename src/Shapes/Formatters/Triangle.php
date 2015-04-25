<?php

namespace Shapes\Formatters;

use Shapes\Interfaces\FormatterInterface;

class Triangle implements FormatterInterface {
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

        return sprintf("Triangle with vertex 1 at (%01.2f, %01.2f), vertex 2 at (%01.2f, %01.2f), vertex 3 at (%01.2f, %01.2f). Area: %01.2f m2", $data['v1x'], $data['v1y'], $data['v2x'], $data['v2y'], $data['v3x'], $data['v3y'], $data['area']);
    }
}