<?php

namespace Riplife\Shapes\Interfaces;


interface FormatterInterface {
    /**
     * Formats a string with the result of the operation.
     *
     * @param array $data
     *   The data provided to build the shape and calculate its area.
     *
     * @return string
     *   A formatted string.
     */
    public function format($data);
}