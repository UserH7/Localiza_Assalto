<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <section class="sec-form">

        <h2>Criar Conta</h2>

        <?php
        if (isset($_SESSION['confSenha'])) {
            echo "<h3>Senha diferente</h3>";
        }
        ?>

        <!-- Form de login - Aparecer primeiro -->
        <form action="../Controller/login-user.php" method="post" id="formLogin">
            <input type="email" name="email" id="emailLogin" placeholder="e-mail"> <br />
            <input type="password" name="senha" id="senhaLogin" placeholder="senha"> <br />
            <input type="submit" value="Entrar">
        </form>

        <!-- Form de cadastro - Aparecer ao cliclar no botão de Criar conta (o form de login é arrastado pro lado) -->
        <form action="../Controller/register-user.php" method="post" id="formRegister">
            Data de Nascimento: <input type="date" name="data_nascimento" id="data_nascimento" required> <br>
            <input type="email" name="email" id="email" placeholder="E-mail" required> <br />
            <input type="text" name="txSenha" id="senha" placeholder="Senha" required> <br />
            <input type="text" name="txRepetirSenha" id="repetirSenha" placeholder="Repetir Senha" required> <br>
            <input type="submit" value="Criar">
        </form>

    </section>

</body>

</html>