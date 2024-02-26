<?php
error_reporting(-1);
session_start();
if(isset($_GET['vyxod'])){
    if($_GET['vyxod'] == 1){
        unset($_SESSION['auth']);
        $_SESSION['res'] = 'Вы вышли!';
        header("Location: index.php");
        die();
    }


}
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
    <a href="index.php">Главная страничка</a>
</menu>
<?php if(!empty($_SESSION['auth'])): ?>
    <h2>Эту страничку могут видеть авторизованые пользователи</h2>
    <a href="?vyxod=1">Выйти</a>
<?php else: ?>
    <h2>Вы не авторизованы</h2>
<?php endif;?>
</body>
</html>
