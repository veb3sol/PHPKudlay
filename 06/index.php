<?php
//Типы данных в PHP -- 10 штук !!!!!
/*
Булев
Целые числа
Числа с плавающей точкой
Строки
Числовые строки
Массивы
Итерируемые
Обьекты
Русурс
NULL  -- когда обращаемся к переменной которой нет
*/
//Булевый тип - bool, boolean
$bool = true;   //TRUE -- регистронезависимые
$bool2 = false;
var_dump($bool);    //bool(true)
var_dump($bool2);

// При выводе на экран булевых значений
echo $bool;     // 1
echo $bool2;     // пустая строка
echo '<br>';
var_dump(0);        //int(0)

// приведение к булевому типу данных - bool boolean
var_dump((bool)0);        //bool(false) . (bool)0 - - приведение к булевому значению
var_dump((bool)0, (boolean)'');        //bool(false) bool(false)
echo '<br>';
var_dump((bool)0, (boolean)'', (bool)-0);       //bool(false) bool(false) bool(false)
echo '<br>';

// Целочисленный тип -- int, integer
$int1 = 0;
$int2 = 1;
var_dump($int1, $int2);     //int(0) int(1)
var_dump(PHP_INT_MAX);  //int(2147483647) - максимальное целое число в системе
echo '<br>';

// числовая, префиксно-числовая, нечисловая строка
var_dump((int)'10', (integer)'20');    //int(10) - числовая строка - (int) или (integer)
var_dump((int)'10Привет');    //int(10) - префиксно-числовая строка
var_dump((int)'        10Привет');    //пробелы ни на что не влияют  int(10)
var_dump((int)'Привет');    //int(0) - нечисловая строка -- всегда приводится к 0
var_dump('10' + 20);    //int(30)
var_dump('10Privet' + 20);    //int(30), но получаем предупреждение, если ошибки скрыты то ничего не увидим кроме норм результата
//var_dump('Privet' + 20);    //ОШИБКА

//Дробные числа
//$sas = 1_256.56; // _  -- используется с версии 7.4
//var_dump($sas);

var_dump((float)123);   //float(123)

var_dump(0.1 + 0.2); // не точное значение - поэтому часто хранят инфу не в долларах а в центах
?>