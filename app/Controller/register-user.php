<?php

require_once '../Model/Usuario.php';
require_once '../DAO/ConexaoBD.php';

$usuario = new Usuario(
    $_POST['data_nascimento'],
    $_POST['email'],
    $_POST['txSenha']
);

$email_usuario = $usuario->get_email();
$senha_usuario = $usuario->get_senha();
$dt_nasc = $usuario->get_data_nascimento();


$stmt = $pdo->prepare("INSERT INTO tbusuarios (email, senha, data_nascimento) VALUES(?, ?, ?)");
$stmt->bindValue(1, $usuario->get_email());
$stmt->bindValue(2, $usuario->get_senha());
$stmt->bindValue(3, $usuario->get_data_nascimento());
$stmt->execute();

echo "Data: " . $usuario->get_data_nascimento() . "<br />";
echo "E-mail: " . $usuario->get_email() . "<br />";
echo "Senha: " . $usuario->get_senha();

?>