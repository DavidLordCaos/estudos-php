<?php
function matriz($nums){
    $num_array = explode(" ", $nums);

    $split = 5;

    $arrayMatriz = array_chunk($num_array, $split);

    $n1 = implode(" ", $arrayMatriz[0]);
    $n2 = implode(" ", $arrayMatriz[1]);
    $n3 = implode(" ", $arrayMatriz[2]);
    $n4 = implode(" ", $arrayMatriz[3]);
    $n5 = implode(" ", $arrayMatriz[4]);


    $jun = "<br>" . $n1 . "<br>" . $n2 . "<br>" . $n3 . "<br>" . $n4 . "<br>" . $n5;

    return $jun;
}

function matrizImpar($nums){
    $num_array = explode(" ", $nums);

    foreach($num_array as $num){
        if ($num % 2 != 0){
            $impar[] = $num;
        }
    }
    $n2 = implode(" ", $impar);
    return $n2;
}

function matrizPares($nums){
    $num_array = explode(" ", $nums);

    foreach($num_array as $num){
        if ($num % 2 == 0){
            $pares[] = $num;
        }
    }
    $n1 = implode(" ", $pares);
    return $n1;
}