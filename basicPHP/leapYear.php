<?php 

// Напишите функцию, которая проверяет год на високосность

function isLeapYear($year)
{
    return ($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0);
}
