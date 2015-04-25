<?php
/**
 * @file
 * ShapesFactory.
 */

namespace Riplife\Shapes;

use Riplife\Shapes\Shapes\Shape;
use Riplife\Shapes\Exceptions\UndefinedShapeException;

class ShapesFactory
{
    public static function factory($config = array())
    {
        $class = $config['shape'];
        $validator = $config['validator'];
        $calculator = $config['calculator'];
        $formatter = $config['formatter'];
        $parameters = $config['parameters'];

        if ($class instanceof Shape) {
            return new $class($validator, $calculator, $formatter, $parameters);
        }
        else
        {
            throw new UndefinedShapeException();
        }


    }
}