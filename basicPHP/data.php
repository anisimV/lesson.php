<?php 

// Реализуйте функцию, которая принимает дату в формате timestamp и возвращает её в формате 15/04/1994

function getCustomDate($date)
{
    return date('d/m/Y', $date);
}
