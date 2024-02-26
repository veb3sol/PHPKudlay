<?php
error_reporting(-1); // что б показывались все ошибки
//Логические операторы
// && - true если все true
$a = 3 == 3 && 3 < 2;       //bool(false)
var_dump($a);
$a = 3 == 3 and 3 < 2;       //bool(true) - оператор присваивания выполнится раньше and
var_dump($a);

// or   ||
// and  &&
// xor - исключающее ИЛИ - если $a или $b равны true - но не оба !
// приоритет or and - меньше чем у = поэтому может присвоиться левая сторона равенства как итог

// !$a - инвертирование

$s = 'Привет ';
$ss = $s.'мир';
var_dump($ss);
echo '<br>';
$d = '<p>Привет </p>'.PHP_EOL.'<p>Василий</p>';
//PHP_EOL - перенос строки, тоже самое что \n
// . конкатенация(соединение) строк
echo $d;

$name = 'Jony';
//$h = "Hello $name";     //Hello Jony
//$h = "Hello {$name}";     //Hello Jony
$h = 'Hello '.$name;       //Hello Jony

echo $h;
echo '<br>';
$hi = 'Hello ';
$hi .= 'Boris';
echo $hi;   //Hello Boris


?>
