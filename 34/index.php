<?php
error_reporting(-1);
$osh = '';
$h = '';
$res ='';
if(isset($_POST['sub'])){
    if (!empty(trim($_POST['log'])) && !empty(trim($_POST['pass']))) {
        $res = "Вы ввели логин - {$_POST['log']} и пароль - {$_POST['pass']}";
        $h = 'hidden';
        $osh = '';
    } else {
        $osh = 'Ошибка, не заполненные все поля!';
        $res = '';
        $h = '';
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
<div class="res"><?= $res; ?></div>
<div class="worn"><?= $osh; ?></div>
<form action="" method="post" <?= $h; ?>>
    <input type="text" name="log">
    <input type="password" name="pass">
    <input type="submit" name="sub" value="Отправить">
</form>
</body>
</html>

<?php

// значение оператора ??
// 1 вариант записи
//$b = 'dd';
if(isset($b)){
    $n = $b;
} else {
    $n = 'нету значения';
}
echo $n;
echo '<br>';

// 2 вариант записи
$x = $b ?? 'нету ничего';
echo $x;



?>