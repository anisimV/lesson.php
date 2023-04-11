<?php 
// ТАБЛИЦА УМНОЖЕНИЯ
echo '<table border="1" width="100%">';

$tr = 1;
while ($tr < 10) {
    echo "<tr>";
    $td = 1;
    while ($td < 10) {
        echo "<td>$td * $tr = " . $td * $tr ."</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}
echo '</table>';
