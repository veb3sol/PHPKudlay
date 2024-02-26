<?php
error_reporting(-1);
session_start();

if(!empty($_SESSION['count'])){
    echo "Вы посетили страничку главную {$_SESSION['count']} раз";
}

?>

<a href="index.php">Главная страничка</a>
