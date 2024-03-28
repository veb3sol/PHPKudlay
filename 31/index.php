<?php

// функции для работы состроками
// php.net/manual/ru/ref.strings.php

//strlen - возращает длину строки - не кол символов а кол байт (на латинеце в 2 раза больше)
// UTF-8 кодировка по умолчанию в php - при ней кирилица - по 2 байта
// функции для работы с многобайтовыми кодировками - ? (начинаются на префикс mb)
// mb_strlen - мультибайтовый аналог, 1 арг - строка, 2 арг - кодировка(по умолчанию - внутренняя UTF-8)
// mb_internal_encoding() - установка\получение внутренней кодировки скрипта

// explode - разбивает строку с помощью разделителя - вернет мвссив с частей строки
// 1 арг - разделитель
// 2 арг - строка

// implode - обьеденяет елементы массива в строку
// 1 арг - разделитель, который будет в стоке -- по умолчанию пустая строка
// 2 арг - массив с которого брать элементы

// htmlentities - преобразует все возможные символы в соответствующие html сущности

// htmlspecialchars  - преобразует специальные символы в html-сущности
// преобразует следующие символы - и код выводится на страничке, а не срабатывает!!!!
// & - &amp
// " - &quot. если установлена ENT_NOQUOTES
// ' - &#039
// < - &lt
// > - &gt

// ltrim - удаляет пробелы (или другие символы) из начала строки
// rtrim - удаляет пробелы (или другие символы) из конца строки
// trim - удаляет пробелы (или другие символы) из начала и конца строки
// nl2br - вставляет html - код разрыва строки перед каждым переводом строки
// str_split - преобразует строку в массив
// strpos - возращает позицию первого вхождения подстроки
// stripos - возращает позицию первого вхождения подстроки без учета регистра
// strtolower - преобразует строку в нижний регистр
// strtoupper - преобразует строку в верхний регистр
// substr - возвращает подстроку
// 1 арг - строка
// 2 арг - с какого символа начинать
// 3 арг - сколько символов
// отрицательные числа - с конца строки

$str = ' Hello, world! ';
$str2 = 'Привет, мир!';
$str3 = "<script>alert('♂Hello &gt;' + \"world\")</script>";
$str4 = "Привет!\nВо первых строках своего письма...";

echo strlen($str);  //15
echo '<br>';
echo strlen($str2);  //21 - латиница по 2 байта
echo '<br>';
echo mb_strlen($str2);  //12 - правильный результат - мультибайтовый агалог функции strlen
echo '<br>';

print_r(explode(',', $str));    // Array ( [0] => Hello [1] => world! )
echo '<br>';

$d = ['Привет', ' Вася!'];
echo implode(',', $d);   // Привет, Вася!
echo '<br>';
echo implode($d);   // Привет Вася! - если разделителя нету - то по умолчанию пустая строка
echo '<br>';

//echo $str3; // выводится алерт
echo '<br>';
echo htmlspecialchars($str3);   // <script>alert('♂Hello &gt;' + "world")</script> - вывод на страничке - код не срабатывает
echo '<br>';
echo htmlspecialchars($str3, ENT_QUOTES);   // дополнительно обрабатываются одинарные кавычки
echo '<br>';

echo trim($str, ' H'); // по умолчанию удаляет пробелы, но если указать 2арг пробел + букву - то удалит все
echo '<br>';

// строка с \n по умолчанию переводит на новую строку но не на страничке
// для перевода -- для замены \n на <br>
echo $str4;     // без перевода изначально
echo '<br>';
echo nl2br($str4);  // с переводом строки
echo '<br>';

print_r(str_split($str)); // массив с символов строки
echo '<br>';
print_r(str_split($str, 3)); // массив c элементами по 3 символа строки
echo '<br>';

echo strpos($str, 'w'); // 8 - на 8 индексе в строке w
echo '<br>';
echo strpos($str, 'e', 2); // 8 - на 8 индексе в строке e. начинать поиск с 2 символа включительно
echo '<br>';

echo stripos($str, 'W'); // 8 - на 8 индексе в строке w - БЕЗ УЧЕТА РЕГИСТРА
echo '<br>';

echo substr($str, 1, 5);    //Hello. 1 - с какого индекса, 5 - сколько символов, второй может быть отрицательным

?>