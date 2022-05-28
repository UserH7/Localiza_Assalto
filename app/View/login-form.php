<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script>
        function exibiInputOutros() {
            var inputOutros = document.getElementById('txOutros');
            // if (inputOutros.style.display === "none") {
            //     inputOutros.style.display = "block";
            // } else {
            //     inputOutros.style.display = "none";
            // }
            inputOutros.removeAttribute("hidden");
            console.log('Removendo');
        }

        function escondeInputOutros() {
            var inputOutros = document.getElementById('txOutros');
            inputOutros.setAttribute("hidden", false);
            console.log('Adicionando');
        }
    </script>

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
            <input type="email" name="email" id="email" placeholder="E-mail" required> <br />
            <input type="text" name="txSenha" id="senha" placeholder="Senha" required> <br />
            <input type="text" name="txRepetirSenha" id="repetirSenha" placeholder="Repetir Senha" required> <br>
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento" required> <br>

            <label>Gênero:</label>
            <input type="radio" name="generos" id="masculino" value="Masculino" onclick="escondeInputOutros()" required>
            <label for="masculino">Masculino</label>
            <input type="radio" name="generos" id="feminino" value="Feminino" onclick="escondeInputOutros()">
            <label for="feminino">Feminino</label>
            <input type="radio" name="generos" id="outros" value="Outros" onclick="exibiInputOutros()">
            <label for="outros">Outros</label>
            <input type="text" name="txOutros" id="txOutros" hidden> <br>

            <input type="submit" value="Criar">
        </form>

    </section>

</body>

</html>