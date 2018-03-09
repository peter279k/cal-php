<?php

namespace lee\Calculator;

class Division
{
    private $number1;
    private $number2;

    public function __construct(int $number1, int $number2)
    {
        if($number2 === 0) {
            throw new \InvalidArgumentException('The number2 should not be zero!');
        }

        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function division()
    {
        return $this->number1 / $this->number2;
    }
}
