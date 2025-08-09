<?php

class Calclulator
{
    public $operator;
    public $number1;
    public $number2;

    public function __construct(string $oper, int $num1, int $num2)
    {
        $this->operator = $oper;
        $this->number1 = $num1;
        $this->number2 = $num2;
    }

    public function calculate()
    {
        switch ($this->operator) {
            case 'add':
                $result = $this->number1 + $this->number2;
                return $result;
                break;
            case 'sub':
                $result = $this->number1 - $this->number2;
                return $result;
                break;
            case 'div':
                $result = $this->number1 / $this->number2;
                return $result;
                break;
            case 'mul':
                $result = $this->number1 * $this->number2;
                return $result;
                break;
            default:
                echo "Please Enter the Correct Operator or Numbers";
                break;
        }
    }
}