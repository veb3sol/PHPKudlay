<?php
error_reporting(-1); // что б показывались все ошибки
//ДЗ
$n = [1,2,3,4,5,6,7,8,9,];
for ($i = 0; $i <= 8; $i++) {
    if($n[$i]%2){
        continue;
    }
    echo $n[$i]. '<br>';
}
echo '<br>';
for ($i = 0; $i <= 8; $i++) {
    if(!($n[$i]%2)){
        echo $n[$i]. '<br>';
    }

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

echo '<br>';
for ($e = 0; $e < 3; $e++) {
    if($goods[$e]['price'] < 120){
        $goods[$e]['price'] += 15;
    }
    echo $goods[$e]['price']. '<br>';
}

echo '<br>';
foreach ($goods as &$gg){
    if ($gg['price'] < 120) {
        $gg['price'] +=15;
    }
    echo $gg['price']. '<br>';
}


?>
