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
    public $radius2;

    /**
     * Helper function to set the object data.
     */
    function setData()
    {
        list($this->x, $this->y, $this->radius, $this->radius2) = $this->getInput();
    }
}