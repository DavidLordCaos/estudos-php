<?php

function showMonth($mes)
{
    $mes = $_POST['mes'];

    if ($mes == 1) {
        $result = "Janeiro";
    } elseif ($mes == 2) {
        $result = "Fevereiro";
    } elseif ($mes == 3) {
        $result = "Março";
    } elseif ($mes == 4) {
        $result = "Abril";
    } elseif ($mes == 5) {
        $result = "Maio";
    } elseif ($mes == 6) {
        $result = "Junho";
    } elseif ($mes == 7) {
        $result = "Julho";
    } elseif ($mes == 8) {
        $result = "Agosto";
    } elseif ($mes == 9) {
        $result = "Setembro";
    } elseif ($mes == 10) {
        $result = "Outubro";
    } elseif ($mes == 11) {
        $result = "Novembro";
    } elseif ($mes == 12) {
        $result = "Dezembro";
    } else {
        $result = "Digite um número válido";
    }
    return $result;
}

