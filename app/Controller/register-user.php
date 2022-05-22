<?php
require_once '../Model/Usuario.php';
require_once '../DAO/ConexaoBD.php';
?>

<?php
session_start();

$usuario = new Usuario(
    $_POST['data_nascimento'],
    $_POST['email'],
    password_hash($_POST['txSenha'], PASSWORD_DEFAULT)
);

$email_usuario = $usuario->get_email();
$senha_usuario = $usuario->get_senha();
$dt_nasc = $usuario->get_data_nascimento();
$confSenha = $_POST['txRepetirSenha'];

if ($confSenha == $senha_usuario) {
    $stmt = $pdo->prepare("INSERT INTO tbusuarios (email, senha, data_nascimento) VALUES(?, ?, ?)");
    $stmt->bindValue(1, $usuario->get_email());
    $stmt->bindValue(2, $usuario->get_senha());
    $stmt->bindValue(3, $usuario->get_data_nascimento());
    $stmt->execute();

    header("location:../View/registrado-sucesso.php");
} else {
    $_SESSION['confSenha'] = false;
    header("location:../View/login-form.php");
}



?>