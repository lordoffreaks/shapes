<?php
/**
 * @file
 * Triangle.
 */

namespace Shapes\Shapes;


class Triangle extends Shape
{

    /**
     * @var int $parameters
     */
    protected $parameters = 6;

    /**
     * @var float
     */
    public $v1x;

    /**
     * @var float
     */
    public $v1y;

    /**
     * @var float
     */
    public $v2x;

    /**
     * @var float
     */
    public $v2y;

    /**
     * @var float
     */
    public $v3x;

    /**
     * @var float
     */
    public $v3y;

    /**
     * Helper function to set the object data.
     */
    function setData()
    {
        list($this->v1x, $this->v1y, $this->v2x, $this->v2y, $this->v3x, $this->v3y) = $this->getInput();
    }
}