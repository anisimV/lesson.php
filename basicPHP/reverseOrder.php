<?php 

// Напишите функцию, чтобы она выводила числа в обратном порядке

function reversOrder($firstNumber)
{
    $i = $firstNumber;

    while ($i>= 1) {
        print_r($i);
        print_r("\n");
        $i = $i - 1;
    }
    print_r('finished!');
}
