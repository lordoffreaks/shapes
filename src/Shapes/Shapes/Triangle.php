<?php
/**
 * @file
 * Circle.
 */

namespace Riplife\Shapes\Shapes;


class Circle extends Shape
{

    /**
     * @var float
     */
    protected $v1x;

    /**
     * @var float
     */
    protected $v1y;

    /**
     * @var float
     */
    protected $v2x;

    /**
     * @var float
     */
    protected $v2y;

    /**
     * @var float
     */
    protected $v3x;

    /**
     * @var float
     */
    protected $v3y;

    /**
     * Helper function to set the object data.
     */
    function setData()
    {
        list($this->v1x, $this->v1y, $this->v2x, $this->v2y, $this->v3x, $this->v3y) = $this->getInput();
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
          'v1x' => $this->v1x,
          'v2x' => $this->v2x,
          'v3x' => $this->v3x,
          'v1y' => $this->v2y,
          'v2y' => $this->v2y,
          'v3y' => $this->v3y,
        );

        return $this->calculator->getArea($data);
    }
}