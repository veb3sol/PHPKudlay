<?php
// Суперглобальные переменные - переменные доступные во всех областях видимости (и в функциях тоже)
//$_FILES  -- переменные файлов, загруженых по HTTP

// при загрузке файлов - использовать только метод post !!!

?>

<!--форма для загрузки файлов-->

<!--в тэге формы надо указать: enctype="multipart/form-data"    method="post -->
<form enctype="multipart/form-data" action="" method="post">
<!--поле MAX_FILE_SIZE должно быть указано ДО поля загрузки файла-->
<input type="hidden" name="MAX_FILE_SIZE" VALUE="30000">
<!--Название name определяет имя в массиве $_FILES -->
Отправить файл: <input name="userfile" type="file">
<input type="submit" value="Отправить файл">
</form>

<?php
//$_FILES['username']['name'] -- оригинальное имя файла на компе клиента
//$_FILES['username']['type'] -- Mime-тип файла предоставляемый браузером, например image/gif
//$_FILES['username']['size'] -- размер принятого файла
//$_FILES['username']['tmp_name'] -- временное имя под которым файл сохранен на сервере
//$_FILES['username']['error'] -- код ошибки, которая может возникнуть при загрузке файла

//is_uploaded_file(); - проверяет был ли загружен файл методом post

//move_uploaded_file() - перемещает загруженый файл в новое место
// вернет true - файл перемещен, false - файл не может быть перемещен по определенным причинам

?>

<!--загрузка массива файлов-->
<!--все загружаемые файлы попадут в массив pictures[]-->

<!--<form action="" method="post" enctype="multipart/form-data">-->
<!--    <p>Изображения:-->
<!--        <input type="file" name="pictures[]">-->
<!--        <input type="file" name="pictures[]">-->
<!--        <input type="file" name="pictures[]">-->
<!--        <input type="submit" value="Отправить">-->
<!--    </p>-->
<!--</form>-->

<?php
//Ограничения при загрузке файлов
//основные ферективы конфигурационного файла php.ini
//file_uploads
//upload_max_filesize  -- максимальный размер закачиваемого файла -- 1 ФАЙЛА!
//upload_tmp_dir
//post_max_size  -- обьем данных который мы можем передать через форму методом post -- ВСЕХ ФАЙЛОВ передаваемых !!!
//max_input_time

// массив $_FILE без отправки - пуст
//var_dump($_FILES);

if(!empty($_FILES)){
    echo '<pre>';
    print_r($_FILES);
    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], 'upload/'.$_FILES['userfile']['name'])){
        echo 'успешно!';
    } else {
        echo 'ошибка';
    }
}

// $_SERVER  -- суперглобальный массив - содержит информацию о сервере и среде исполнения
//существуют ключи $_SERVER

echo $_SERVER['PHP_SELF']; //kudlay.loc/35/index.php -- адрес скрипта относительно корня сайта
echo '<br>';
echo $_SERVER['SERVER_NAME']; //localhost -- название сайта, сервера
echo '<br>';
echo $_SERVER['QUERY_STRING']; //asd=555&wer=111   строка запросов - все что после ? в адресной строке

if(!empty($_SERVER['HTTP_REFERER'])){
    echo $_SERVER['HTTP_REFERER'];          // адрес с которого пользователь пришел
}

?>

