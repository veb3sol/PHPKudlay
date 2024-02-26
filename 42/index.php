<?php
error_reporting(-1);

function debug($data){
    echo '<pre>'.print_r($data, 1).'</pre>';
}

// подключение к БД -- процедурный подход MySQL
//$mysqli = mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');

$db = mysqli_connect('localhost', 'root', '', 'my_db');
//var_dump($db); // обьект с инфой о подключении, а если ошибка - то false

// еще один вариант
//$db = mysqli_connect('localhost', 'root', '122222', 'my_db') or die('Error');
//var_dump($db);

//запрос после подключения
$res = mysqli_query($db, 'SELECT * FROM `test` WHERE id > 1');
var_dump($res);
echo '<br>';
// мы получили результирующий набор
//object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(3) ["lengths"]=> NULL ["num_rows"]=> int(1) ["type"]=> int(0) }
// field_count - количество столбцов - 3
//num_rows  -  количество строк - 1

// посмотреть то что мы выбрали
//mysqli_fetch_all() - выбирает все строки из результирующего набора и помещает их в ассоциативный массив, обычный массив или оба
// mode - необязательный параметр - константа которая показывает какой массив мы должны получить
// MYSQLI_ASSOC - асоциативный массив
// MYSQLI_NUM - обычный массив
// MYSQLI_BOTH - оба массива

//$res_mas = mysqli_fetch_all($res); // 2 пар по умолчанию - MYSQLI_NUM - получим обычный массив
//debug($res_mas);
echo '<br>';
// если 1 строка в массиве - Array ( [0] => Array ( [0] => 3 [1] => Валентинов [2] => 55 ) )
// если больше строк Array ( [0] => Array ( [0] => 3 [1] => Валентинов [2] => 55 ) [1] => Array ( [0] => 4 [1] => Чанов [2] => 66 ) )

// если получать ассоциативный массив используя константу MYSQLI_ASSOC
//$res_mas_assoc = mysqli_fetch_all($res, MYSQLI_ASSOC);
//debug($res_mas_assoc);
// индификаторы каждого вложенного массива - поля БД
//Array
//(
//    [0] => Array
//    (
//        [id] => 3
//        [name] => Валентинов
//        [age] => 55
//        )
//    [1] => Array
//(
//    [id] => 4
//    [name] => Чанов
//    [age] => 66
//        )
//)

// !!! использовать mysqli_fetch_all() - ТОЛЬКО ПРИ ПОЛУЧЕНИИ НЕБОЛЬШОГО ОБЬЕМА ДАННЫХ!!!
// или использовать mysqli_fetch_all() при LIMIT в запросе

// mysqli_fetch_array и mysqli_fetch_assoc
echo '<br>';
// mysqli_fetch_assoc - каждый раз обращается к следующей строке и возращает одну строку!
while ($row = mysqli_fetch_assoc($res)){        // пока mysqli_fetch_assoc что то возращает, пока есть строки
    echo "Имя юзера - {$row['name']} . Возраст юзера - {$row['age']}";
    echo '<br>';
}

// вставить данные в табличку
//$v = mysqli_query($db, "INSERT INTO `test`(`name`, `age`) VALUES ('Сидорчук',10)" );
//var_dump($v);   //bool(true)

// ставка с переменными
//$n = 'Юрчук';
//$a = 14;
//$v1 = mysqli_query($db, "INSERT INTO `test`(`name`, `age`) VALUES ('$n',$a)" );
//var_dump($v1);   //bool(true)

// если $n = "d'Artanyan" - тогда ошибка при записи - конфликт кавычек
//mysqli_real_escape_string() - экранирует специальные символы в строке для использования в sql-выражении
//$n3 = "d'Artanyan";
//$n3 = mysqli_real_escape_string($db, $n3);      // экранируем данные в строке
//$e3 = 100;
//var_dump(mysqli_query($db, "INSERT INTO `test`(`name`, `age`) VALUE ('$n3','$e3')")); //bool(true)

// 2 вариант - использования sprintf() - возращает форматированую строку
//$n5 = "d'Argos";
//$e5 = 99;
// готовим отфарматированый запрос
//$query = sprintf("INSERT INTO `test`(`name`, `age`) VALUE ('%s',%d)",
//                            mysqli_real_escape_string($db, $n5),
//                            (int)$e5);
// (int)$e5 если нету переменной то подставится 0 но будет предупреждение

// выполняем подготовленный запрос
//var_dump(mysqli_query($db, $query));

// Обновление данных
//$vv = "d'Artanyan1";
//$ee = 80;
//$qq = sprintf("UPDATE `test` SET `name`='%s',`age`=%d WHERE id = 8",
//                        mysqli_real_escape_string($db, $vv),
//                        (int)$ee);
//var_dump(mysqli_query($db, $qq));

// если не использовать WHERE в запросе UPDATE - заменит все ячейки!!!!!!!

// удаление данных
var_dump(mysqli_query($db, "DELETE FROM `test` WHERE id=7 "));
// если такой записи нету - вернет тоже true

?>