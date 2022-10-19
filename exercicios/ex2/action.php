<?php

function calculo($num)
{
    $num = $_POST['num'];

    if ($num % 2 == 0 && $num % 5 == 0 && $num % 10 == 0) {
        return "O número $num é divisivel por 10, 5 e 2";
    } else if ($num % 5 == 0 && $num % 10 == 0) {
        return "O número $num é divisivel por 10 e 5";
    } else if ($num % 2 == 0 && $num % 10 == 0) {
        return "O número $num é divisivel por 10 e 2";
    } else if ($num % 2 == 0 && $num % 5 == 0) {
        return "O número $num é divisivel por 5 e 2";
    } else if ($num % 2 == 0) {
        return "O número $num é divisivel por 2";
    } else if ($num % 5 == 0) {
        return "O número $num é divisivel por 5";
    } else {
        return "O número $num não é divisivel por 2, 5 e 10";
    }
}
