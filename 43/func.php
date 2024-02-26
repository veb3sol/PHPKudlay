<?php

function debug($data)
{
    echo '<pre>'.print_r($data, 1).'</pre>';
}

function registration(): bool
{
    global $pdo;

    $log = !empty($_POST['login']) ? trim($_POST['login']) : '';
    $pass = !empty($_POST['pass']) ? trim($_POST['pass']) : '';

    if(empty($log) || empty($pass)){
        $_SESSION['errors'] = "Поля логин и пароль обязательные";
        return false;
    }
    $res = $pdo ->prepare("SELECT COUNT(*) FROM users WHERE login=?");
    $res ->execute([$log]);
    // в массиве должны быть по очереди значения которые подставятся в ?
    //execute([$log]) - запускает подготовленный запрос на выполнение

    if($res->fetchColumn()){
        // $res->fetchColumn() -- если больше 0 - то пользователь такой уже есть
        $_SESSION['errors'] = 'Данное имя уже используется';
        return false;
    }

    // password_hash - создает хэш пароля
    // 1 арг - пароль
    // 2 арг - алгоритм
    // 3... могут быть дополнительные функции
    //password_hash('rasmusok', PASSWORD_DEFAULT)

    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $res = $pdo->prepare("INSERT INTO users(login, pass) VALUE (?, ?)");
    if($res->execute([$log, $pass])){
        $_SESSION['success'] = 'Успешная регистрация';
        return true;
    } else {
        $_SESSION['errors'] = 'Ошибка регистрации!';
        return false;
    }

}

function login(): bool
{
    global $pdo;

    $log = !empty($_POST['login']) ? trim($_POST['login']) : '';
    $pass = !empty($_POST['pass']) ? trim($_POST['pass']) : '';

    if(empty($log) || empty($pass)){
        $_SESSION['errors'] = "Поля логин и пароль обязательные";
        return false;
    }

    $res = $pdo->prepare("SELECT * FROM users WHERE login=?");
    $res->execute([$log]);
    if(!$user = $res->fetch()) {
        // если что то будет - то такой логин есть и инфа об этом юзере запишется в $user - условие не сработает
        // если ничего нету - то false и сработает условие
        $_SESSION['errors'] = 'Логин или пароль введены неверно!';
        return false;
    }

    if(!password_verify($pass, $user['pass'])){
        //password_verify($pass, $user['pass']) -- сравнивает пароль который пришел(в открытом виде) и хэш с БД
        $_SESSION['errors'] = 'Логин или пароль введены неверно!';
        return false;
    } else {
        $_SESSION['success'] = 'Вы успешно авторизовались!';
        // устанавливаем что мы авторизованы
        $_SESSION['user']['name'] = $user['login'];
        $_SESSION['user']['id'] = $user['id'];
        // сюда записываем так всю инфу о пользователе с БД - емаил, путь к аватарке...

        return true;
    }
}

function save_message():bool
{
    global $pdo;
    $message = !empty($_POST['message']) ? trim($_POST['message']) : '';
    print_r($message);

    if(!isset($_SESSION['user']['name'])){
        $_SESSION['errors'] = 'Авторизируйтесь что бы отправлять сообщения';
        return false;
    }

    if(empty($message)){
        $_SESSION['errors'] = 'Введите текст сообщения';
        return false;
    }

    $res = $pdo->prepare('INSERT INTO messages(name, message) VALUE (?, ?)');
    if($res->execute([$_SESSION['user']['name'], $message])){
        $_SESSION['success'] = 'Сообщение добавлено';
        return true;
    } else {
        $_SESSION['errors'] = 'Возникла ошибка при добавлении сообщения!';
        return false;
    }
}

function get_messages(): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM messages");
    return $res->fetchAll();
}
