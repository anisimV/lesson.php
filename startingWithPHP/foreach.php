<?php 

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];

$i = 0;
while ($i < 10) {
    echo $nums[$i] . '<br>';
    $i++;
}

foreach ($nums as $num) {
    echo $num . '<br>';
}
