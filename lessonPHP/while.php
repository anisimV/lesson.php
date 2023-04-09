<?php 
/*
$i = 2;
while (true) {
    echo "$i<br>";
    if ($i == 10) {
        echo " Число найдено {$i}";
        break;
    }
    $i++;
}*/
// ВЫволим число от 1 до 10 
/*$i = 1;
while ($i <= 10) {
    echo "{$i}<br>";
    $i++;
}*/

echo '<table border="1" width="100%">';

$tr = 1;
while ($tr <= 10) {
    echo "<tr>";
    $td = 1;
    while ($td <= 20) {
        echo "<td>" . $td * $tr ."</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}

echo '</table>';