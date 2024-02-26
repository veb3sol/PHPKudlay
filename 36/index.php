<?php
error_reporting(-1);

//session_start()  -- начать новую или возобновить существующую сессию
// PHPSESSID - создается такая кука и ей присваивается определенный ключ (название файла сессии на сервере), это сессионная кука
// сессионная кука - которая существует пока не будет закрыт браузер

//возращает true - файл сессии создан, false - файл сессии не создан

//session_unset() -- удалить все переменные сессии
//session_destroy()  -- уничтожить все данные сессии

session_start();

// запись в сессию
$_SESSION['qqq'] = 123;  // qqq|i:123;  -- запись в файле сессии

var_dump($_SESSION);    // array(1) { ["qqq"]=> int(123) }
echo '<br>';
echo $_SESSION['qqq'];  //123

//СЧЕТЧИК ПОСЕЩЕНИЯ
$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;

$_SESSION['test'] = 'test';
$_SESSION['test2'] = 'test2';

// удаление переменной сессии
unset($_SESSION['test']);
var_dump($_SESSION);

?>

<a href="index2.php">Вторая страничка</a>
