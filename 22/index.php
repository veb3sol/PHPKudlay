<?php
error_reporting(-1); // что б показывались все ошибки

//Цикл foreach - для вывода массивов
$nums = [1,2,3,4,5,6,7,8,9,];
foreach ($nums as $num){        // $nums - массив, $num - элемент массива
    echo $num. '<br>';
}

foreach ($nums as $key => $num){        // $nums - массив, $key - ключ элемента, $num - элемент массива
    echo $key.' --- '.$num. '<br>';
}

$goods = [
    [
        'title' => 'Audi',
        'discr' => 'Очень хороший немецкий автомобиль',
        'price' => 200,
    ],
    [
        'title' => 'Fiat',
        'discr' => 'Замечательный итальянский автомобиль',
        'price' => 100,
    ],
    [
        'title' => 'Lada',
        'discr' => 'Русское гавно....',
        'price' => 25,
    ],
];

foreach ($goods as $g) {
    echo "Название: {$g['title']} <br>";
    echo "Описание: {$g['discr']} <br>";
    echo "Описание: $g[price] <br>";
    echo "<hr>";
}

echo '<br>';
//for - можно изменять значение в массиве
//foreach - нельзя менять значения в массиве, что бы менять надо перед элементом ставить &

foreach ($goods as &$g) {   // без & - умножить цену не получится, умножится только копия

    $g['price'] *= 2;
    echo "Название: {$g['title']} <br>";
    echo "Описание: {$g['discr']} <br>";
    echo "Описание: $g[price] <br>";
    echo "<hr>";
}

// после работы foreach (когда присваеваем по ссылке с &) необходимо уничтожать переменную $value --- unset()




?>
