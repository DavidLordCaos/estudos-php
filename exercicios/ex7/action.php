<?php

function returnBook($book, $choose) {
    $book = $_POST['book'];
    $choose = $_POST['choose'];

    if ($choose == 'prof') {
        $result = "Você tem 10 dias pra devolver o livro $book";
    } else {
        $result = "Você tem 3 dias pra devolver o livro $book";
    }
    return $result;
}
