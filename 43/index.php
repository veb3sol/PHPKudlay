<?php
// создание обьекта PDO
//$dbh = new PDO('mysql:host=localhost;dbname=my_db', $user, $pass);
// 'mysql:host=localhost;dbname=my_db'  -- всегда писать слитно!

//запрос через обьект PDO
//$dbh -> query('SELECT * from FOO');
session_start();
require_once __DIR__.'/db.php';
require_once __DIR__.'/func.php';


if(isset($_POST['register'])){      // значит отправлена форма регмстрации
    registration();
    header("Location: index.php"); // что бы браузер не запрашивал повторно отправить форму
    die();
}

if(isset($_POST['auth'])){      // значит отправлена форма регмстрации
    login();
    header("Location: index.php"); // что бы браузер не запрашивал повторно отправить форму
    die();
}

if (isset($_GET['do']) && $_GET['do'] == 'exit'){
    if(!empty($_SESSION['user'])){
        unset($_SESSION['user']);
    }
    header('Location: index.php');
    die();
}

if (isset($_POST['add'])){
    save_message();
    header('Location: index.php');
    die();
}

$m = get_messages();
//debug($m);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row my-3">
            <div class="col">
                <?php if(!empty($_SESSION['errors'])):?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php
                        echo $_SESSION['errors'];
                        unset($_SESSION['errors']);  // удаляем переменную с ошибками, она показывается 1 раз
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" arria-label="Close"></button>
                </div>
                <?php endif;?>
                <?php if(!empty($_SESSION['success'])):?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);  // удаляем переменную с ошибками, она показывается 1 раз
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" arria-label="Close"></button>
                </div>
                <?php endif;?>

            </div>
        </div>

        <?php if(empty($_SESSION['user']['name'])):?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Регистрация</h3>
            </div>
        </div>
        <form action="index.php" method="post" class="row g-3">
            <div class="col-md-6 offset-md-3">
                <div class="form-floating md-3">
                    <input type="text" name="login" class="form-control" id="floatingInput" placeholder="Имя">
                    <label for="floatingInput">Имя</label>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <div class="form-floating">
                    <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Пароль</label>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <button class="btn btn-primary" name="register">Зарегистрироваться</button>
            </div>
        </form>
        <div class="pow mt-3">
            <div class="col-md-6 offset-md-3">
                <h3>Авторизация</h3>
            </div>
        </div>
        <form action="index.php" method="post" class="row g-3">
            <div class="col-md-6 offset-md-3">
                <div class="form-floating md-3">
                    <input type="text" name="login" class="form-control" id="floatingInput" placeholder="Имя">
                    <label for="floatingInput">Имя</label>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <div class="form-floating">
                    <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Пароль</label>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <button type="submit" name="auth" class="btn btn-primary">Войти</button>
            </div>
        </form>
        <?php else: ?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <p>Добро пожаловать, <?php echo htmlspecialchars($_SESSION['user']['name'])?>! <a href="?do=exit">Выйти</a> </p>
            </div>
        </div>

        <form action="index.php" method="post" class="row g-3 md-5">
            <div class="col-md-6 offset-md-3">
                <div class="form-floating">
                    <textarea name="message" id="floatingTextarea" style="height: 100px" class="form-control"></textarea>
                    <label for="floatingTextarea">Сообщение</label>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <button class="btn btn-primary" type="submit" name="add">Отправить</button>
            </div>
        </form>
        <?php endif;?>
        <?php if(!empty($m)): ?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <hr>
               <?php foreach ($m as $mes):?>
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">Автор: <?= htmlspecialchars($mes['name']) ?></h5>
                        <p class="card-text"><?= nl2br(htmlspecialchars($mes['message'])) ?></p>
                        <p><?= htmlspecialchars($mes['created_at']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>

</body>
</html>
