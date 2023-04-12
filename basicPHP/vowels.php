<?php 

// Реализуйте функцию, которая принимает строку, считает количество гласных букв в ней

function Vowel($char)
{
    $vowels = 'aeiouy';

    return str_contains($vowels, strtolower($char));
}

function vowels($text)
{
    $len = strlen($text);
    $result = 0;

    for ($i = 0; $i < $len; $i++) {
        if (Vowel($text[$i])) {
            $result += 1;
        }
    }

    return $result;
}
