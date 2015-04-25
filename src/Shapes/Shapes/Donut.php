<?php
/**
 * @file
 * Donut.
 */

namespace Riplife\Shapes\Shapes;


class Donut extends Circle
{

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
}