<?php
require_once '../Model/Usuario.php';
require_once '../DAO/ConexaoBD.php';
?>

<?php
session_start();

if($_POST['generos'] == "Outros") {
    $genero_usuario = $_POST['txOutros'];
} else {
    $genero_usuario = $_POST['generos'];
}

$usuario = new Usuario(
    $_POST['email'],
    password_hash($_POST['txSenha'], PASSWORD_DEFAULT),
    $_POST['data_nascimento'],
    $genero_usuario
);

$confSenha = $_POST['txRepetirSenha'];

if (password_verify($confSenha, $usuario->get_senha())) {
    $stmt = $pdo->prepare("INSERT INTO tbusuarios (email, senha, data_nascimento, genero) VALUES(?, ?, ?, ?)");
    $stmt->bindValue(1, $usuario->get_email());
    $stmt->bindValue(2, $usuario->get_senha());
    $stmt->bindValue(3, $usuario->get_data_nascimento());
    $stmt->bindValue(4, $usuario->get_genero());
    $stmt->execute();

    header("location:../View/registrado-sucesso.php");
} else {
    $_SESSION['confSenha'] = false;
    header("location:../View/login-form.php");
}


?>