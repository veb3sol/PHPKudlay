<?php
// Пользовательские функции. Часть 2

//неограниченое число аргументов
function sum(...$args){
   // var_dump($args);        //$args - массив аргументов
    $res = 0;
    foreach ($args as $arg){    // перебираем массив аргументов
        $res +=$arg;            // увеличиваем результат на элемент массива
    }
    echo $res;
}
sum(1,2,3,4,5);     //array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }

function sum2($a, $b, ...$args){
    $res = $a + $b;     // $args - игнорируется, не используется
    echo $res;
}
sum2(1,2);

//статические переменные
function test(){
    $a = 0;
    echo $a;
    $a++;
}

//вызываем функцию 3 раза
test();
test();
test();
// результат -- 000

function test2(){
    static $a = 0;  //сохраняет свое значение между вызовами,
    echo $a;
    $a++;
}
//вызываем функцию 3 раза
test2();
test2();
test2();
// результат -- 012

// подсказка типа - тайпхийтинг

function sumka(int $a, int $b, int $c){
    echo $a+$b+$c;
}

sumka(1,2.3,3);     // 2.3 будет преобразовано в 2

// указать какой тип данных должна возращать функция
function sumka2($a, $b, $c): int
{
    return $a+$b+$c;
}

$s = sumka2(5,5.3,5);     // в $s будет то что вернет return функции
echo $s;

// если нету return, то функция возращает NULL
// return завершает программу, операторы после него не исполняются

// void  - указывает что функция ничего не возращает

// обнуляемые типы - когда непонятно какой тип вернет функция
function did(string  $a): ?string       //функц может вернуть string а может и NULL
{                                       //did(?string  $a) -- может быть строка на вход
    if($a){
        return 'Test';          //функция может вернуть string
    }
    return null;                    // функция может вернуть NULL
}

// Именованые аргументы - появились в php8

function fotik($term1, $term2 = 1, $factor = 2){
    return ($term1+$term2)*$factor;
}
echo fotik(1, factor:5); //factor - именованый аргумент и он указывается без $
echo fotik(factor:3, term2:5, term1:5); // порядок передачи аргументов неважен








?>
