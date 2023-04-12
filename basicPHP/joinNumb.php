<?php

// Напишите функцию, которая объединяет все числа из диапазона в строку

function joinNumb($start, $stop)
{
    $i = $start;
    $res = '';

    while ($i <= $stop) {
        $res = "{$res}{$i}";
        $i = $i + 1;
    }
    return $res;
}
