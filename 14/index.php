<?php
error_reporting(-1); // что б показывались все ошибки
//Тернарный оператор
//null - 1.переменной было присвоено null, 2. не присвоено значений, 3. переменная удалена unset()
//null - регистронезависимая
// если переменной нету - null + некритичная ошибка
//var_dump($w);   //NULL
$f = 'dart';
echo $f == 'dart' ? 'это дарт' : 'это не есть дарт';    // это дарт

$price = 10;
echo $price ? $price : 'неизвестная цена';  // выводим цену если она установлена
echo $price ? : 'неизвестная цена';  // выводим цену если она установлена - сокращенный вариант
echo $price >=10 ? : 'цена меньше 10'; // условие вернет true, а true преобразуется к "1" и выведится



?>
