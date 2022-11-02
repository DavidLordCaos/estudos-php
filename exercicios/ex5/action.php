<?php

function triangleType($ab, $bc, $ca) {
    $ab = $_POST['ab'];
    $bc = $_POST['bc'];
    $ca = $_POST['ca'];

    if ($ab == $bc && $bc == $ca) {
        $result = "equilátero";
    } else if ($ab != $bc && $ab == $ca) {
        $result = "isósceles";
    } else if ($ab != $bc && $bc != $ca) {
        $result = "escaleno";
    }
    return $result;
}