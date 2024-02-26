<?php
// рекомендации по оформлению кода
//PSR - РЕКОМЕНДАЦИИ
// документирование кода


/**
 * Return sum .....
 * @param $a
 * @param $b
 * @return int
 */
function soda($a, $b): int
{
    return $a+$b;
}

/**
 * @param int $s
 * @return int
 */
function ret(int $s):int
{
    return $s*2;
}

// подавление ошибок
@unlink('file.txt'); // если такого файла нету, то ошибки не будет

?>