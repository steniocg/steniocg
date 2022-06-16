<?php
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$data = filter_input(INPUT_POST, 'data');
$data_timestamp = strtotime($data);
$data_brasil = date("d/m/Y", $data_timestamp);

if($name && $email && $data_brasil) {
  
  echo 'Olá,' .$nome."<br/>";
  echo 'Sabemos que seu e-mail é: '.$email. 'e como você nasceu em '.$data_brasil. 'então sua idade é:
  XX anos.'."<br/>";
  echo 'Obrigado por se cadastrar.';

  
} else {
  header("Location: index.php");
  exit;
}