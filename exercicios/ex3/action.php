<?php

function checkinResult($name) {
    $sex = $_POST['genero'];
    $age = $_POST['idade'];
    $name = $_POST['nome'];

    if ($sex === 'F' && $age < 25) {
        $result = $name;
    } else {
        $result = $name;
    }
    return $result;
}
