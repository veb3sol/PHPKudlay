<?php
error_reporting(-1); // что б показывались все ошибки
//for цикл

$i = 0;
while ($i < 10) {       // от 0 до 9 включительно
    echo $i.'<br>';
    $i++;
}

$i1 = 0;
while ($i1++ < 5) {     // от 1 до 5 включительно
    echo $i1.'<br>';
}

for ($e = 0; $e < 6; $e++) {
    echo "eto - $e <br>";
}

// части в for можно упускать
$s = 0;
for(;;){
    if($s > 10){
        break;
    }
    echo "valday - $s <br>";
    $s++;
}

// вывод select с помощью for
echo '<select name="sel">';
for ($g = 1900; $g <= 2021; $g++) {
    echo "<option value='$g'>";
    echo "$g";
    echo "</option>";
}
echo '</select>';



?>
