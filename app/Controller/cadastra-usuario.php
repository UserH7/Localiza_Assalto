<?php

require_once '../Model/Usuario.php';

$usuario = new Usuario(
    $_POST['data_nascimento'],
    $_POST['email'],
    $_POST['txSenha']
);

echo "Data: " . $usuario->get_data_nascimento() . "<br />";
echo "E-mail: " . $usuario->get_email() . "<br />";
echo "Senha: " . $usuario->get_senha();

?>