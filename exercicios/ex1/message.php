<?php

require('action.php');

$errors = [];
$data = [];

if (empty($_POST['num1'])) {
    $errors['num1'] = 'Um número é obrigatório.';
}

if (empty($_POST['num2'])) {
    $errors['num2'] = 'Um número é obrigatório.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Concluido!';
    $data['result'] = calcular($_POST['num1'], $_POST['num2']);
}

echo json_encode($data);
