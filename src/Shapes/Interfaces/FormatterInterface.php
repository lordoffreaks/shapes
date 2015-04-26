<?php

namespace Shapes\Interfaces;

use Shapes\Interfaces\ShapeInterface;

interface FormatterInterface {
    /**
     * Formats a string with the result of the operation.
     *
     * @param ShapeInterface $shape
     *   The data provided to build the shape and calculate its area.
     *
     * @return string
     *   A formatted string.
     */
    public function format(ShapeInterface $shape);
}