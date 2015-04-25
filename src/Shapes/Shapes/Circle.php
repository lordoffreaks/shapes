<?php
/**
 * @file
 * Circle.
 */

namespace Riplife\Shapes\Shapes;


class Circle extends Shape
{

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
}