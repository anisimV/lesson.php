<?php 

// Напишите функцию, которая считает сумму ряда целых чисел. Ряд задаётся двумя числами — начальным и конечным

function sumInt($start, $stop)
{
    $summa = 0;

    for ($start; $start <= $stop; $start += 1) {
        $summa += $start;
    }

    return $summa;
}
