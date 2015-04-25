<?php

namespace Shapes\Exceptions;


class ValidationException extends \Exception {

    const INVALID_PARAMETERS_NUMBER = 1;
    const INVALID_PARAMETER_TYPE    = 2;

    protected $value;

    public function __construct($message = "", $code = 1, Exception $previous = null, $value = null) {
        parent::__construct($message, $code, $previous);
        $this->value = $value;
    }

    /**
     * @return double
     */
    public function getValue()
    {
        return $this->value;
    }
}