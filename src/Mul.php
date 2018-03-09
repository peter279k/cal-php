<?php

namespace lee\Calculator;

class Mul
{
    private $number1;
    private $number2;

    public function __construct(int $number1, int $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function mul()
    {
        return $this->number1 * $this->number2;
    }
}
