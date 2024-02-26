<?php
error_reporting(-1); // что б показывались все ошибки

//max_execution_time - в настройках PHP - сколько дается времени на выколнение команды (цикла)
//если время выполнение больше - работа цикла прерывается (цикл бесконечный)
//Цикл while - выполнится если условие выполняется
//echo phpinfo();

$i = 1;
while ($i < 10) {
    echo "$i <br>";
    $i++;
}
echo '<table border="1" width="100%">';

$tr = 1;
while ($tr <= 10){
    echo '<tr>';
        $td = 1;
        while ($td <= 20){
            echo "<td>{$td}</td>";
            $td++;
        }
    echo '</tr>';
    $tr++;
}
echo '</table>';

// do - while    выполнится хотя бы один раз
$ff = 11;
do {
    echo $ff.'<br>';
    $ff++;
} while ($ff <= 10);




?>
