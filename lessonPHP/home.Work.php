<?php 
// 1. Используя цикл while, реализуйте вывод выпадающего списка select с годами от 1800 до 2023 включительно

$year = 1800;
echo "<select>";
while ($year <= 2023) {
    echo "<option value='{$year}'>{$year}</option>";
    $year++;
}
echo "</select>";

// 2. Показывает кол-во секунд в часе, сутках и неделе

$min = 60;
$hour = $min * 60;
$day = $hour * 24;
$week = $day * 7;

var_dump($hour, $day, $week);

// 3. Дана переменная $x = 60. Используя комбинированные операторы, покажите кол-во секунд в часе, сутках и неделе

$x = 60;
var_dump($x *= 60);
var_dump($x *= 24);
var_dump($x *= 7);

// 4. Таблица умножения

$i = 1;
while ($i < 10) {
    $j = 1;
    while ($j < 10) {
        echo "{$i} * {$j} = " . $i * $j . "</br>" ;
        $j++;
    }
    $i++;
}

// 5. В цикле for выведите только четные числа массива
//  Вариант 1
$nums = [1,2,3,4,5,6,7,8,9,10];
for ($i = 0; $i < 10; $i++) {
    if ($nums[$i] % 2) {
        continue;
    }
    echo $nums[$i] . '<br>';
}
//  Вариант 2
for ($i = 1; $i < 10; $i += 2) {
    echo $nums[$i] . '<br>';
}

// 6. Напишите функцию getСount, которая принимает массив, и возвращает количество элементов в массиве

function getСount(array $arr): int
{
    $cnt = 0;
    foreach ($arr as $item) {
        $cnt += 1;
    }
    return $cnt;
}

// 7. Напишите функцию, принимающую 2 параметра, которая выведет таблицу умножения по полученным множителям

function getTable($line, $colum)
{
    $table = '<table border="1" width="100%">';
    for ($tr = 1; $tr <= $line; $tr++) {
        $table .= "<tr>";
        for ($td = 1; $td <= $colum; $td++) {
            $table .= "<td>$td * $tr = " . $td * $tr ."</td>";
        }
        $table .= "</tr>";
    }
    $table .= '</table>';
    return $table;
}

echo getTable(5, 7);

echo '<hr>';

// 8. Напишите функцию, которая принимает массив как аргумент и возвращает количество элементов массива

function countArr($arr)
{
    $cnt = 0;
    foreach ($arr as $item) {
        $cnt++;
    }
    return $cnt;
}

// 9. Напищите функцию подсчитывающую сумму значений элементов массива

function sum($arr)
{
    $cnt = 0;
    foreach ($arr as $num) {
        $cnt += $num;
    }
    return $cnt;
}

// 10. СОздайте массив от 1 до 100
// Вариант 1
print_r(range(1, 100, 1));
//Вариант 2
$arr = [];
for ($i = 1; $i <= 100; $i++) {
//    $arr[] = $i;
    array_push($arr, $i);
}

// 11. Функция подсчитывает количсетво вхождений подстроки в строку

function strСount($str, $substr)
{
    return substr_count($str, $substr);
}

// 12. Функция удаляет пробелы в начале и в конце строки
// Вариант 1
function noSpace($str)
{
    return trim($str);
}
// Вариант 2
function noSpaceTwo(string $str): string
{
    return str_replace(' ', '', $str);
}

// 13. Напишите функцию maxNumber. которая принимает аргументом число и возвращает максимальное число из цифр

// Вариант 1
function max_number(int $num): int
{
    $digits = str_split($num);
    rsort($digits);
    return (int)implode('', $digits);
}
// Вариант 2
$inputDigit = 4;
$output = '';
for ($i=0; $i < $inputDigit; $i++) { 
    $output.='9';
}
$output = (int) $output;

echo $output;
