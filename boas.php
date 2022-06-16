<?php
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$data = filter_input(INPUT_POST, 'data');
$data_timestamp = strtotime($data);
$data_brasil = date("d/m/Y", $data_timestamp);


if($nome && $email && $data) {

   echo 'NOME: '. $nome."<br/>";
   echo 'EMAIL: '.$email."<br/>";
   echo 'Data de Nascimento: '.$data_brasil;

} else {

    header("Location: index.php");
    exit;
    
}