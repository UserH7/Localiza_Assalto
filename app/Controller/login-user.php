<?php

use function PHPSTORM_META\type;

require_once '../Model/Usuario.php';
require_once '../DAO/ConexaoBD.php';

session_start();
?>

<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $pdo->prepare("SELECT email, senha FROM tbusuarios WHERE email = ?");
$stmt->bindValue(1, $email);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_BOTH);


if(password_verify($senha, $row['senha'])){
    // Querie - pega a data de nascimento do usuario
    $stmt_dt = $pdo->prepare("SELECT data_nascimento FROM tbusuarios WHERE email = ?");
    $stmt_dt->bindValue(1, $email);
    $stmt_dt->execute();
    $row_dt = $stmt_dt->fetch(PDO::FETCH_BOTH);

    // Cria um Obj Usuario com informações do Usuario verificado
    $usuario = new Usuario(
        $row_dt[0],
        $email,
        $senha
    );

    // Cria session com o Obj Usuario
    $_SESSION['usuario'] = $usuario;
    $_SESSION['logado'] = true;

    header("location:../View/index.php");
    exit();
    
} else {
    header("location:../View/login-form.php");
    exit();
}

?>