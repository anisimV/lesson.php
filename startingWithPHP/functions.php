<?php 
/*
function testFunc()
{
    echo 'Hello world';
}

testFunc();
*/
/*
function testOne($x = 'Gues') 
{
    echo "<p>Привет, {$x} </p>";
}

$x = 'Jon';
testOne($x);
*/
/*
function funcSum(...$nums)
{
    $res = 0;
    foreach ($nums as $num) {
        $res += $num;
    }
    echo $res;
}

funcSum(1,2,3,4,5,);

*/

//таблица умножения
function getTable($row, $colum)
{
    $table = '<table border="1" width="100%">';
    for ($tr = 1; $tr <= $row; $tr++) {
        $table .= "<tr>";
        for ($td = 1; $td <= $colum; $td++) {
            $table .= "<td> $td * $tr = " . $td * $tr ."</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</table>";
    return $table;
}

//echo getTable(5, 7);

//echo '<hr>';

$arrInt = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function countUser($arr)
{
    $i = 0;
    foreach($arr as $items) {
        $i++;
    }
    return $i;
}
echo countUser($arrInt);

echo '<br>';

function sumUser($arr)
{   
    $i = 0;
    foreach($arr as $items) {
        $i += $items;
    }
    return $i;
}
echo sumUser($arrInt);

echo '<br>';
/*
foreach(range(0, 100) as $res) {
    echo $res . "<br>";
}
*/
for($i = 0; $i <= 100; $i++) {
    echo "{$i} <br>";
}
