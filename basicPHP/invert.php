<?php 

//Реализуйте функцию которая переворачивает цифры в переданном числе

function invert(int $num): int
{
    $reverse = (int) strrev((string) abs($num));
    return $num >= 0 ? $reverse : -$reverse;
}
