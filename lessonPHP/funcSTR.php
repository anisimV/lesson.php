<?php 

$text = "\n Привет, мир. Прощай война!";
echo mb_strlen($text); //ДЛИНА СТРОКИ
echo '<br>';

$str = 'один, два, три, четыре';
$res = explode(',', $str);          //Разбивает строку с помощью разделителя
print_r($res);
echo '<br>';
echo implode(',', $res);           //Объединяет элементы массива в строку

$textTwo = "Hello, world";

$trimmed = ltrim($textTwo, 'H');          
echo '<br>';
print_r($trimmed);


function strCount($str, $pstr)
{
    return substr_count($str, $pstr);
}

echo strCount('privet privet', 'r');

echo '<br>';

function noSpace($str)
{
    return trim($str);
}
echo noSpace(' privet privet   ');
