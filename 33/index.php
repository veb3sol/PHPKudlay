<?php  error_reporting(-1);

//print_r($_POST);
if(isset($_GET['xxx'])){
    print_r($_GET);
}

//существует ли функция? isset()
//if(isset($x)){      // если переменная существует, тогда выводим ее
//    var_dump($x);
//}

//empty($x) // проверяет не только существует ли переменная но и не равна ли она значениям которые преобразуются в false
//empty($x) == true. когда $x - пустая строка, 0, false - когда она пустая

if (!empty($_POST['agree'])){   // on - если заполнен
    print_r($_POST) ;
}

// проблемма - при мультивыборе - получаем последнее выбраное  [sports] => voley, хотя выбрано 2 вида спорта
// решение - <select name="sports[]" multiple >  -- указать имя селекта со скобками как массив
//[sports] => Array ( [0] => foot [1] => voley )

//для проверки с какой фоормы пришли данные
if (isset($_POST['send_poisk']))
    echo 'отправленная форма поиска';

var_dump($_REQUEST);
// $_REQUEST --- тут данные с $_GET, $_POST, $_COOKIE
// $_REQUEST --- может стать причиной ошибки, в $_COOKIE может быть такой же ключ как и название поля формы



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
<form action="" method="post">
    <p>Name <input type="text" name="name"></p>
    <p>Email <input type="email" name="email"></p>
    <p>Text <textarea name="message" ></textarea></p>
    <p>Agree <input type="checkbox" name="agree"></p>
<!--    при select - selectel принимает одно из значений en fr ua-->
    <p>Select <select name="selectel">
            <option value="en">English</option>
            <option value="fr">France</option>
            <option value="ua">Ukraine</option>
        </select></p>

    <!--    при возможности мультивыбора в select -->
    <p>Select <select name="sports[]" multiple >
            <option value="foot">Футбол</option>
            <option value="basket">Баскетбол</option>
            <option value="voley">Волейбол</option>
        </select></p>
    <p><button type="submit" name="send_form">Send</button></p>
</form>

<!--создаем еще одну форму-->
<form action="" method="post">
    <p><input type="text" name="poisk"></p>
    <p><button type="submit" name="send_poisk" value="ppp">Send</button></p>
<!--  value="ppp" --- это значит что при отправке формы   send_poisk = ppp  -->
</form>
<br>
<!--через ссылку мы можем без формы отправлять get запросы-->
<a href="?name=Andrew&age=25&xxx=1">Отправить</a>

</body>
</html>



















































