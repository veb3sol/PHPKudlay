
<?php
error_reporting(-1);
session_start();

$login = 'admin';
$password = '$2y$10$9eTK.I77xVBBWJg/XwQwLOhPYlY2miXO4rqIULfDKogJReLSBpdYO';

echo password_hash($password, PASSWORD_DEFAULT); // $2y$10$9eTK.I77xVBBWJg/XwQwLOhPYlY2miXO4rqIULfDKogJReLSBpdYO

if(!empty($_POST)){
    if($_POST['log'] == $login && password_verify($_POST['pass'], $password)) {
        //$_POST['pass'] == $password можно заменить на password_verify($_GET['pass'], $password)
        // password_verify($_GET['pass'], $password) - сравнивает пароль от юера $_GET['pass']
        // с хэшем который храниться в БД
        $_SESSION['auth'] = 1;
        $_SESSION['res'] = 'Поздравляю, Вы успешно ввошли в систему!';
        header("Location: secret.php"); // -- отправить авторизованого на другую страничку
        // что бы скрипт не выполнялся после header
        // die(); или exit(); - можно даже без скобок
        die();


    } else {
        $_SESSION['res'] = 'Ошибка!';
    }
} else {
    $_SESSION['res'] = '';
    //header("Location: index.php");
}

// ЗАГОЛОВКИ - вкладка СЕТЬ - вибираем страничку нашу и в появившемся справа окне - заголовки!
// заголовки отправляются когда мы что то выводим - session_start(); должно быть ДО вывода
// потому что данные сессии отправляются в заголовке

//отправить заголовки  - header();

// для хэширования пароля -password_hash()
//1 аргумент - пароль
// 2 аргумент - алгоритм шифрования - например PASSWORD_DEFAULT



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<menu>
    <a href="secret.php">Секретная страничка</a>
</menu>

<h2>Эту страничку могут видеть все</h2>

<form action="" method="post">
    Login: <input type="text" name="log">
    Password: <input type="password" name="pass">
    <button type="submit">Отправить</button>
</form>
<div class="res"><?= $_SESSION['res']; ?></div>
</body>
</html>