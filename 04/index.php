
<?php
error_reporting(0); // настройка вывода ошибок, 0 - не выводить ошибки, -1 - выводить все ошибки

$title = 'Мой заголовок';
$winnie_puh = "Hello, I'm Vinnie";
$winnie_puh2 = 'Hello, I\'m Vinnie2';   # \ -- экранируем спец символы
// если ненадо экранировать, а мы экранируем - обратный слэш выводится
$fruit = 'orange';
$from_winnie = "I have $fruit"; # в 2-х кавычках переменные обрабатываются
$from_winnie2 = "I have 2 {$fruit}s"; # явно указаваем где переменная
// ПЕРЕМЕННЫЕ ЧУСТВИТЕЛЬНЫ К РЕГИСТРУ
$var = 'Gosha';
$Var = 'Gosha1';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
</head>
<body>
<?php $title = 'Большая игра'?>
<h1><?php echo $title; ?></h1>
<p><?= $winnie_puh; ?></p>
<p><?= $winnie_puh2; ?></p>
<p><?= $from_winnie; ?></p>
<p><?= $from_winnie2; ?></p>
<?php
var_dump($var, $Var); //string(5) "Gosha" string(6) "Gosha1" -- инфа о переменной
// NULL - если такая переменная отсутствует
// 5 -- количество байтов
?>


</body>
</html>