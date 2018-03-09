<?php

namespace lee\Calculator;

class Calculator
{
    private $number1;
    private $number2;

    public function __construct(int $number1, int $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function add()
    {
        $add = new Add($this->number1, $this->number2);

        return $add->add();
    }

    public function minus()
    {
        $minus = new Minus($this->number1, $this->number2);

        return $minus->minus();
    }

    public function mul()
    {
        $mul = new Mul($this->number1, $this->number2);

        return $mul->mul();
    }

    public function division()
    {
        $division = new Division($this->number1, $this->number2);

        return $division->division();
    }
}
