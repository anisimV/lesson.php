<?php 
// Выводим нечетные числа массива
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for ($i = 0; $i < 10; $i++) {
    if (!($nums[$i] % 2)) {
        continue;
    }
    echo $nums[$i] . '<br>';
}

$goods = [
    [
        'title' => 'Nokia',
        'price' => '100',
        'qt' => '10',
    ],
    [
        'title' => 'Simens',
        'price' => '120',
        'qt' => '7',
    ],
    [
        'title' => 'Motorola',
        'price' => '105',
        'qt' => '16',
    ]
];

echo '<pre>' . print_r($goods, return: 1) . '</pre>';
// Увеличиваем стоимость если цена меньше 120
for ($i = 0; $i < 3; $i++) {
    if ($goods[$i]['price'] < 120) {
        $goods[$i]['price'] += 15;
    }
    $goods[$i]['price'] = ($goods[$i]['price'] < 120) ? $goods[$i]['price'] += 15 : $goods[$i]['price'];

}
// Увеличиваем стоимость если цена меньше 120
foreach ($goods as $good) {
    if ($good['price'] < 120) {
        $good['price'] += 15;
    }
}
echo '<pre>' . print_r($goods, return: 1) . '</pre>';
