<?php
//ДЗ1
//Дан массив $nums = [1,2,3,1,5,3,2,6,7,7,8,8,9,2,5,];
// Написать свой вариант функции count()
$nums = [1,2,3,1,5,3,2,6,7,7,8,8,9,2,5,];
function my_count(array $arr): int
{
    $r = 0;
    foreach ($arr as $a){
      $r++;
    }
    return $r;
}
echo my_count($nums);
echo '<hr>';

// ДЗ2
// посчитайте суму масссива со спец функцией и без

function sumka1(array $ar):int
{
    $re=0;
    foreach ($ar as $a){
        $re += $a;
    }
    return $re;
}
echo sumka1($nums);

function sumka2(array $ar):int
{
    return array_sum($ar);
}
echo sumka2($nums);
echo '<hr>';

//ДЗ3
// создать массив с числами от 1 до 100 - 2 способа: спец функция + свой способ
$nach = 1;
$endik = 100;
$masik = [];
for($i = $nach; $i <= $endik; $i++){
    $masik[] = $i;
}
print_r($masik);
echo '<hr>';
print_r(range(1, 100, 1)) ;

?>