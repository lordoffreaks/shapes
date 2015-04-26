<?php

namespace Shapes\Interfaces;


interface ShapeInterface {
    /**
     * Helper function to set the object data.
     */
    public function setData();

    /**
     * Helper function to set the object data.
     */
    public function format();

    /**
     * Helper function to get the area of a shape.
     */
    public function getArea();
}