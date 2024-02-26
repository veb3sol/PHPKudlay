<?php
error_reporting(-1);

//setcookie() - отправляет куки
//setcookie($name, $value);
// $name -- название куки - обязат параметр
// $value -- значение куки - по умолчанию пустая строка  - обьязат парам
// $expires = 0 -
// $path = ''
// $domain = ''
// $secure = false
// $httponly = false

//необязательные параметры можно передать массивом

setcookie('test', 'TEST1');
var_dump($_COOKIE);         //array(1) { ["test"]=> string(5) "TEST1" }

//setcookie('test2', 'TEST2', path:'/');  // кука доступна для всего домена
//setcookie('test3', 'TEST3', [ 'path'=>'/'] ); // кука доступна для всего домена

//устанавливаем куку на весь домен на 10с
//setcookie('for10', '10', ['path'=>'/', 'expires'=>time()+10]);
// для php8 expires - expires_or_options
//setcookie('for20', '10', path:'/', expires_or_options:time()+20);

// для удаления куки - указываем те же параметры
setcookie('test3', 'TEST3', [ 'path'=>'/', 'expires' => time()-3600]);
// кука не удалена, потому что не перадали все параметры с которыми она создавалась - 'path'=>'/'
setcookie('test2', '', [ 'expires' => time()-3600]);
// при удалении значение куки можно не указывать - пустая строка
// 'expires' => time()-3600 -- передается время меньше текущего, можно и time()- 1

//код для сброса
if(isset($_GET['do']) && $_GET['do'] == 'res'){
    setcookie('count', '', time()-300, '/');
    header('Location: index.php');      // если не перезагрузить тут страничку - куки одновлятся только после перезагрузки - но до этого они успеют обновиться кодом ниже
    die(); // всегда после header - убиваем все процессы на этой загрузке странички
}


// СЧЕТЧИК ПОСЕЩЕНИЙ
// если есть такие куки - увеличиваем на 1, если нету - записываем новые куки со значением 1
isset($_COOKIE['count']) ? setcookie('count', ++$_COOKIE['count'], time()+300, '/') : setcookie('count', 1, time()+300, '/');
echo '<br>';
echo "Вы посещали страничку ".($_COOKIE['count'] ?? 1);
// $_COOKIE['count'] ?? 1   -- если есть куки то записываем их, если нету - 1


// сброс счетчика
echo '<p><a href="?do=res">Сброс</a></p>'



?>