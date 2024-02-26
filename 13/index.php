<?php
error_reporting(-1); // что б показывались все ошибки
//Управляющие конструкции. IF-ELSE-ELSEIF

// echo - вывод нескольких выражений -- ничего не возращает
echo 'Test 1', 'Test 2', 'Test 3';
// print - вывод 1 выражения -- возращает 1
print 'Rebus1';

var_dump(print 'Testik');   //Testikint(1)
//var_dump(echo 'Testik');   !!! - ошибка - echo ничего не возращает

$l = 'green';
if($l == 'green') echo "It's green"; // скобки можно не использовать если надо выполнить 1 инструкцию

if ($l == 'green'){
    echo 'gooo!';
} elseif ($l == 'yellow'){
    echo 'get ready';
} else {
    echo 'stop!';
}

?>
