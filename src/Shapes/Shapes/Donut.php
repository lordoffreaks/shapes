<?php
/**
 * @file
 * Donut.
 */

namespace Shapes\Shapes;


class Donut extends Circle
{

    /**
     * @var int $parameters
     */
    protected $parameters = 4;

    /**
     * @var float $radius2
     */
    protected $radius2;

    /**
     * Helper function to set the object data.
     */
    function setData()
    {
        list($this->x, $this->y, $this->radius, $this->radius2) = $this->getInput();
    }

    /**
     * Calculates the area for a given shape.
     *
     * @return double
     *   The area of the shape.
     */
    public function getArea()
    {
        $data = array(
          'radius' => $this->radius,
          'radius2' => $this->radius2,
        );

        return $this->calculator->getArea($data);
    }

    /**
     * Formats a string with the result of the operation.
     *
     * @return string
     *   A formatted string.
     */
    public function format() {
        $data = array(
            'x' => $this->x,
            'y' => $this->y,
            'radius' => $this->radius,
            'radius2' => $this->radius2,
            'area' => $this->getArea(),
        );

        return $this->formatter->format($data);
    }
}