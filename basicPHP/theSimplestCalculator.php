<?php 

// простейший калькулятор

function theSimplestCalculator($action, $numOne, $numTwo)
{
    switch ($action) {
        case '+':
            return $numOne + $numTwo;
        case '-':
            return $numOne - $numTwo;
        case '*':
            return $numOne * $numTwo;
        case '/':
            return $numOne / $numTwo;
        default:
            return null;
    }
}
