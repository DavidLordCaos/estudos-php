<?php

function calcular($num1, $num2){
    $total = $num1 + $num2;

    if ($total > 20) {
        $total = $total + 8;
    } else {
        $total = $total - 5;
    }
    return $total;
}