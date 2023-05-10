<?php 

$s = 2;

$items = [
    'key1' => 'value1',
    'key2' => 'value2',
];

foreach ($items as $key => $value) {
        if ((int)$value == 0) {
            echo $key.'...';
        }

}


$a = 5;

function func($a) {
    return $a++;
}
function func2($a) {
    return ++$a;
}
echo func(func2(func2(func(func($a)))));

$basket = [
    [
        'position' => 'книга по пхп',
        'quantity' => 1,
    ],
    [
        'position' => 'мышь',
        'quantity' => 12,
    ],
];

echo countBasket( $basket );

function countBasket( $basket )
{
    $summ = 0;
    foreach( $basket as $val )
    {
        $quantity = $val['quantity'];
        $summ += $quantity;
    }
    return $summ;
}


