<?php
//ДЗ1
//создать функцию, которая принимает массив, а вернет кол элементов
$arr = [1,2,3,4,5,6,7,8,9,10,];
$goods = [
    [
        'title' => 'Volvo',
        'price' => 200,
        'qty' => 10,
    ],
    [
        'title' => 'Volvo',
        'price' => 200,
        'qty' => 10,
    ],
    [
        'title' => 'Volvo',
        'price' => 200,
        'qty' => 10,
    ],
];

function rer(array $a): int
{
    $res = 0;
    foreach ($a as $m){
        $res++;
    }
    return $res;
}

echo rer($arr);
echo rer($goods);

//2ДЗ
// нужна функция с 2 параметрами которая посторит табличку умножения, параметры - кол строк и столбцов

function tablica(int $stroki, int $stolbcy): void
{
    echo '<table>';
    $s = 1;

    while ($s <= $stroki){
        echo '<tr>';
        $r = 1;
            while ($r<=$stolbcy){
                echo '<td>';
                    echo $s*$r;
                echo '</td>';
                $r++;
            }
            $s++;
        echo '</tr>';
    }
    echo '</table>';
}

tablica(6,6);

?>