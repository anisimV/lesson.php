<?php 

// Напишите функцию. Если первая буква не заглавная, возвращает перевернутый вариант исходной строки

function convertText($world)
{
    if ($world[0] === strtoupper($world[0])) {
        return $world;
    } else {
        return strrev($world);
    }
}
