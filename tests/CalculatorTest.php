<?php

namespace lee\Calculator;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @dataProvider providerForAdd
     */
    public function testAdd($expectedValue, $number1, $number2)
    {
        $calculator = new Calculator($number1, $number2);

        $this->assertSame($expectedValue, $calculator->add());
    }

    /**
     * @return array
     */
    public function providerForAdd()
    {
        return [
            [3, 1, 2],
            [0, 1, -1],
            [0, -1, 1],
            [-2, -1, -1],
        ];
    }

    /**
     * @dataProvider providerForMinus
     */
    public function testMinus($expectedValue, $number1, $number2)
    {
        $calculator = new Calculator($number1, $number2);

        $this->assertSame($expectedValue, $calculator->minus());
    }

    /**
     * @return array
     */
    public function providerForMinus()
    {
        return [
            [-1, 1, 2],
            [-5, -1, 4],
            [2, 1, -1],
            [0, -1, -1],
        ];
    }

    /**
     * @dataProvider providerForMul
     */
    public function testMul($expectedValue, $number1, $number2)
    {
        $calculator = new Calculator($number1, $number2);

        $this->assertSame($expectedValue, $calculator->mul());
    }

    /**
     * @return array
     */
    public function providerForMul()
    {
        return [
            [2, 1, 2],
            [-1, 1, -1],
            [-1, -1, 1],
            [1, -1, -1],
        ];
    }

    /**
     * @dataProvider providerForDivision
     */
    public function testDivision($expectedValue, $number1, $number2)
    {
        $calculator = new Calculator($number1, $number2);

        $this->assertSame($expectedValue, $calculator->division());
    }

    /**
     * @return array
     */
    public function providerForDivision()
    {
        return [
            [0.5, 1, 2],
            [-2, 10, -5],
            [-2, -10, 5],
            [2, -10, -5],
        ];
    }

    public function testConstructorIfNumber2IsZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $calculator = new Calculator(1, 0);

        $calculator->division();
    }
}
