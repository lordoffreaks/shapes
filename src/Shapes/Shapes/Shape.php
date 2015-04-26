<?php
/**
 * @file
 * Circle.
 */

namespace Shapes\Shapes;

use Shapes\Interfaces\ShapeInterface;
use Shapes\Interfaces\ValidatorInterface;
use Shapes\Interfaces\AreaCalculatorInterface;
use Shapes\Interfaces\FormatterInterface;

abstract class Shape implements ShapeInterface
{
    /**
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * @var AreaCalculatorInterface
     */
    protected $calculator;

    /**
     * @var FormatterInterface
     */
    protected $formatter;

    /**
     * @var int
     */
    protected $parameters;

    /**
     * @var array $input
     */
    protected $input;

    public function __construct(ValidatorInterface $validator, AreaCalculatorInterface $calculator, FormatterInterface $formatter)
    {
        $this->validator = $validator;
        $this->calculator = $calculator;
        $this->formatter = $formatter;
    }

    /**
     * Sanitize and
     *
     * @param string $input
     *   The data provided to build the shape and calculate its area.
     *
     * @return ShapeInterface
     *   An instance of the object.
     *
     */
    public function beforeValidate($input) {
        $data = explode(' ', $input);

        // Numeric values must be transformed to doubles.
        foreach ($data as $key => $value) {
            if (is_numeric($value)) {
                $data[$key] = (double) $value;
            }
        }

        $this->setInput($data);

        return $this;
    }

    /**
     * Validates whether or not an input is valid to calculate the
     * area of the shape.
     *
     * @param string $input
     *   The data provided to build the shape and calculate its area.
     *
     * @throws \Shapes\Exceptions\ValidationException
     */
    public function validate($input) {
        $this->beforeValidate($input);
        $this->validator->validate($this->getInput(), $this->getParameters());
        $this->setData();
    }

    /**
     * @return int
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @return array
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @param array $input
     */
    public function setInput($input)
    {
        $this->input = $input;
    }

    /**
     * Helper function to set the object data.
     */
    abstract public function setData();

    /**
     * Formats a string with the result of the operation.
     *
     * @return string
     *   A formatted string.
     */
    public function format() {
        return $this->formatter->format($this);
    }

    /**
     * Calculates the area for a given shape.
     *
     * @return double
     *   The area of the shape.
     */
    public function getArea()
    {
        return $this->calculator->getArea($this);
    }
}