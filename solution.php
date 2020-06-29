<?php

/**
 * @param int $X
 * @param array $A
 * @return int
 */

function solution($X, $A) : int
{
    $n = count($A);
    $count = [];
    for ($k=0; $k < $n; $k++){
        if(!isset($count[$A[$k]]) || $count[$A[$k]] > $k) {
            $count[$A[$k]] = $k;
        }
    }

    if(count($count) == $X){
        return max($count);
    }

    return -1;
}

