<?php

namespace Shapes\Test\Services;

use Shapes\Services\Validator;

class CircleValidatorTest extends \PHPUnit_Framework_TestCase {

    const VALID_NUMBER_OF_PARAMS = 3;

    private $validator;

    public function setUp()
    {
        $this->validator = new Validator();
    }

    /**
     * @dataProvider validCircleInput
     */
    public function testValidCircleInput($input) {
        $result = $this->validator->validate($input, self::VALID_NUMBER_OF_PARAMS);
        $this->assertTrue($result, implode(' ', $input) . " should be a valid input for a circle");
    }

    public function validCircleInput() {
        return array(
            array(array(1.2, .14, 78.0)),
        );
    }

    /**
     * @dataProvider inValidCircleInputFormat
     * @expectedException \Shapes\Exceptions\ValidationException
     * @@expectedExceptionCode 2
     */
    public function testInValidCircleInputFormat($input) {
        $this->validator->validate($input, self::VALID_NUMBER_OF_PARAMS);
    }

    public function inValidCircleInputFormat() {
        return array(
            array(array('1.2', .14, 78.0)),
            array(array(13, NULL, 780)),
            array(array(13, 14, 780)),
        );
    }

    /**
     * @dataProvider inValidCircleInputNumber
     * @expectedException \Shapes\Exceptions\ValidationException
     * @@expectedExceptionCode 1
     */
    public function testInValidCircleInputNumber($input) {
        $this->validator->validate($input, self::VALID_NUMBER_OF_PARAMS);
    }

    public function inValidCircleInputNumber() {
        return array(
            array(array('1.2', .14, 78.0, 100)),
            array(array(13)),
            array(array()),
        );
    }
}
