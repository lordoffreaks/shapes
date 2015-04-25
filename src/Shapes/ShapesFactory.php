<?php
/**
 * @file
 * ShapesFactory.
 */

namespace Shapes;

use Shapes\Shapes\Shape;
use Shapes\Exceptions\UndefinedShapeException;

class ShapesFactory
{
    public static function factory($config = array())
    {
        $class = $config['class'];
        $validator = new $config['validator'];
        $calculator = new $config['calculator'];
        $formatter = new $config['formatter'];

        try {
            return new $class($validator, $calculator, $formatter);
        }
        catch (\Exception $e) {
            throw new UndefinedShapeException();
        }
    }
}