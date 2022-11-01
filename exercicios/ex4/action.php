<?php

function numberOrder($n1, $n2, $n3) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    if($n1 < $n2 && $n1 < $n3 && $n2 < $n3) {
        $result = ["$n3, $n2, $n1"];
    }else if($n1 < $n2 && $n1 < $n3 && $n2 > $n3) {
        $result = ["$n2, $n3, $n1"];
    }else if($n1 < $n2 && $n1 > $n3 && $n2 > $n3) {
        $result = ["$n2, $n1, $n3"];
    }else if($n1 > $n2 && $n1 < $n3 && $n2 < $n3) {
        $result = ["$n3, $n1, $n2"];
    }else if($n1 > $n2 && $n1 > $n3 && $n2 > $n3) {
        $result = ["$n1, $n2, $n3"];
    }else if($n1 > $n2 && $n1 > $n3 && $n2 < $n3) {
        $result = ["$n1, $n3, $n2"];
    }
    return $result;
}


