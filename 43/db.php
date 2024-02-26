<?php

$host = 'localhost';
$db = 'my_db';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,        // ошибки в виде исключения
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,        // получать ассоциативный массив
];
$pdo = new PDO($dsn, $user, $pass, $options);

