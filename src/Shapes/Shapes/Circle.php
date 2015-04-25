<?php
/**
 * @file
 * Circle.
 */

namespace Shapes\Shapes;


class Circle extends Shape
{

    /**
     * @var int $parameters
     */
    protected $parameters = 3;

    /**
     * @var float $x
     */
    protected $x;

    /**
     * @var float $y
     */
    protected $y;

    /**
     * @var float $radius
     */
    protected $radius;

    /**
     * Helper function to set the object data.
     */
    function setData()
    {
        list($this->x, $this->y, $this->radius) = $this->getInput();
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
            'area' => $this->getArea(),
        );

        return $this->formatter->format($data);
    }
}