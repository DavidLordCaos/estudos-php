<?php
require('action.php');

$errors = [];
$data = [];

if(empty($_POST['nums'])){
    $errors['nums'] = "Informe um grupo de vitne e cinco números";
}

if(!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['matriz'] = matriz($_POST['nums']);
    $data['impar'] = matrizImpar($_POST['nums']);
    $data['pares'] = matrizPares($_POST['nums']);
}

echo json_encode($data);