<?php
require_once '../Model/Usuario.php';
require_once '../DAO/ConexaoBD.php';

session_start();
?>

<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $pdo->prepare("SELECT COUNT(email) FROM tbusuarios WHERE email = ? AND senha = ?");
$stmt->bindValue(1, $email);
$stmt->bindValue(2, $senha);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_BOTH);

if ($row[0] == 0) {
    echo "E-mail ou Senha incorreto";
} elseif ($row[0] == 1) {

    // Querie - pega a data de nascimento do usuario
    $stmt_dt = $pdo->prepare("SELECT data_nascimento FROM tbusuarios WHERE email = ? AND senha = ?");
    $stmt_dt->bindValue(1, $email);
    $stmt_dt->bindValue(2, $senha);
    $stmt_dt->execute();
    $row_dt = $stmt_dt->fetch(PDO::FETCH_BOTH);

    // Cria um Obj Usuario com informações do Usuario verificado
    $usuario = new Usuario(
        $row_dt[0],
        $email,
        $senha
    );

    // Criar session com o Obj Usuario

    echo "Bem-vindo! {$usuario->get_data_nascimento()}";
} else {
    echo "Erro";
}

?>