<?php
error_reporting(-1); // что б показывались все ошибки
//домашнее задание - 2

echo '<select name="select">';
$g = 1900;
while ($g <= 2021) {
    echo "<option value='$g'>$g</option>";
    $g++;
}
echo '</select>';
echo '<br>';

echo '<table border="1" width="100%">';
$tr = 1;
while ($tr < 10) {
    echo '<tr>';
    $td = 1;
    while ($td < 10) {
        echo " <td> $tr x $td = ".$tr*$td.'</td>';
        $td++;
    }
    echo '</tr>';
    $tr++;
}
echo '</table>';
?>
