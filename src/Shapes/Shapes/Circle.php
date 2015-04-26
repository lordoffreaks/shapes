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
    public $x;

    /**
     * @var float $y
     */
    public $y;

    /**
     * @var float $radius
     */
    public $radius;

    /**
     * Helper function to set the object data.
     */
    function setData()
    {
        list($this->x, $this->y, $this->radius) = $this->getInput();
    }
}