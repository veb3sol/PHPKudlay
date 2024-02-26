<?php  error_reporting(-1);

/*Напишите функцию str_count(); которая принимает 2 арг - строку и подстроку, возращает кол вхождений подстроки
 * substr_count()
 * */

function str_count(string $strok, string $subok): int
{
    $strok1 = mb_strtolower($strok);
    $subok1 = mb_strtolower($subok);
    $mas_sub = explode($subok1, $strok1);
    $len_mas_sub = count($mas_sub);
    return $len_mas_sub-1;
}
echo str_count('Страна, Привет, мой свет, Привет', 'привет');

/*Написать функц no_space(string $str): string  - вернет ту же строку но без пробелов
*str_replace()
 * */
function no_space(string $str): string
{
    echo '<br>';
//    $mas_str = mb_str_split($str);
    $mas_str = str_split($str);
    $res_mas = [];
    foreach ($mas_str as $ms){
        if($ms != ' '){
            $res_mas[] = $ms;
        }
    }
    $res = implode($res_mas);
    return $res;
}

echo no_space('поехали кататься на лыжах');

/*Написать функцию max_number(int $num): int которая принимает аргументом число и возращает максимальное чмсло из
 *  цифер получаемого аргумента Пример 123 => 321
 */
function max_number(int $num): int
{
//    $str_num = (string)$num;
//    $split_str_num = str_split($str_num);
//    $chisl_mas = [];
//    foreach ($split_str_num as $ss){
//        $chisl_mas[] = (int)$ss;
//    }
//    rsort($chisl_mas);
//    $sm_str = [];
//    foreach ($chisl_mas as $sm){
//        $sm_str[] = (string)$sm;
//    }
//    $res_str = implode($sm_str);
//    $res_num = (int)$res_str;
//    return $res_num;

    $digit = str_split($num);       // автоматически приобразовывается к строке $num
    rsort($digit);          // сортировка по убыванию
    return (int)implode($digit);    // из массива делаем строку и приводим ее к числу

}
echo '<br>';
echo max_number(8945275);

?>