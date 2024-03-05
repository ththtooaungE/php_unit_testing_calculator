<?php

use PHPUnit\Framework\TestCase;

require 'Calculator.php';

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();

        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtrace()
    {
        $calculator = new Calculator();

        $result = $calculator->subtract(5, 5);

        $this->assertEquals(0, $result);
    }

    public function testMultiply()
    {
        $calculator = new Calculator();
        $result = $calculator->multiply(5, 5);
        $this->assertEquals(25, $result);
    }
}