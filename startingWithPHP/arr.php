<?php 

$arr_1 = ['Petrov', 'Ivanov', 'idorov',];

$arr_1[] = 'Giena';
echo '<pre>' . print_r($arr_1, return: 1) . '</pre>';

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$schop = [
    [
        'brand' => 'acer',
        'price' => 100,
    ],
    [
        'brand' => 'asus',
        'price' => 200,
    ],
    [
        'brand' => 'msi',
        'price' => 300,
    ]

];

$list = [
    'brand' => 'asus',

];

echo '<pre>' . print_r($schop, return: 1) . '</pre>';

for ($i = 0; $i < 3; $i++) {
    echo "Наименование: {$schop[$i]['brand']} <br>";
    echo "цена: {$schop[$i]['price']} <br>";

}

function nsum(array $arr): int
{
    $res = 0;
    foreach($arr as $items) {
        $res += 1;
    }
    return $res;
}

echo nsum($schop);

