<?php

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
