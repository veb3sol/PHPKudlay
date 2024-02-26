<?php
//Строки
$str = '<p>Hello</p>';
$str2 = "<p>Hello2</p>"; // обрабатываются переменные и управляющие последовательности

//самые используемые управл последовательности
//      \n - новая строка
//      \r - возврат каретки
//      \t - горизонтальная табуляция

echo "<p>Hello</p> \n";     // \n - управляющая последовательность - перевод строки
echo "<p>Hello1</p>";
echo PHP_EOL;               // перевод строки независимо от ОС
echo "<p>Hello\\2</p>";     //   \\ - вывод экранированого слэша

// Heredoc -- что бы не заморачиваться с экранированием
$str3 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut et neque nesciunt provident quod repudiandae sed sint veniam? Error, illo!";

$my_name = "Djon";
$str4 = <<<"HEREDOC"
<div>
$my_name
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut et neque nesciunt
Пример двойного слэша \\ и одного \ffjhkjh
</div>
HEREDOC;
echo $str4;

//  "HEREDOC" - в двойных кавычках или без кавычек  -- это типа строка в двойных кавычках
// 'NEWDOC'  - в одинарных кавычках -- это типа строка в одинарных кавычках

// перевод в строку
$retro = 555;
var_dump((string)$retro);       //string(3) "555"
$ter = false;
$ter1 = true;
var_dump((string)$ter); // string(0) ""  -- пустая строка
var_dump((string)$ter1);    //string(1) "1" -- 1 как строка





?>
