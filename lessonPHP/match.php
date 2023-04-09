<?php 
/*
$grade = 3;
$res = match (true) {
    $grade >= 10 => 'excellent',
    $grade >= 7 => 'good',
    $grade >= 4 => 'bad',
    default => 'very bad',
};
*/
$grade = 3;
$res = match (true) {
    ($grade >= 10) && ($grade < 13) => 'excellent',
    ($grade >= 7) && ($grade < 10) => 'good',
    ($grade >= 4) && ($grade < 7) => 'bad',
    default => 'very bad',
};
echo $res;
