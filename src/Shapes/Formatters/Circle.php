<?php

namespace Shapes\Formatters;

use Shapes\Interfaces\FormatterInterface;

class Circle implements FormatterInterface {
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
        return sprintf("Circle with centre at (%01.2f, %01.2f) and radius %01.2f. Area: %01.2f m2", $data['x'], $data['y'], $data['radius'], $data['area']);
    }
}