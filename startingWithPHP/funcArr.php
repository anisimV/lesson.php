<?php 

include 'arr.php';


//echo '<pre>' . print_r($schop, return: 1) . '</pre>';

echo count($schop, 1);
echo '<br>';
print_r(array_count_values($nums));

echo '<br>';

var_dump(array_key_exists('brand', $list));

echo '<br>';

var_dump(in_array('asus', $list));

echo '<br>';

var_dump(array_keys($list));
