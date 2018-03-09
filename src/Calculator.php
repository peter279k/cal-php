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
        return (new Add($this->number1, $this->number2))->add();
    }

    public function minus()
    {
        return (new Minus($this->number1, $this->number2))->minus();
    }

    public function mul()
    {
        return (new Mul($this->number1, $this->number2))->mul();
    }

    public function division()
    {
        return (new Division($this->number1, $this->number2))->division();
    }
}
