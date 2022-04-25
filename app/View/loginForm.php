<!DOCTYPE html>
<html lang="p-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <section class="sec-form">

        <h2>Criar Cadastro</h2>

        <form action="../Controller/cadastra-usuario.php" method="post" class="form-cadastro">
            <input type="date" name="data_nascimento" id="data_nascimento"> <br>
            <input type="email" name="email" id="email" placeholder="E-mail"> <br>
            <input type="text" name="txSenha" id="senha" placeholder="Senha"> <br>
            <input type="text" name="txRepetirSenha" id="repetirSenha" placeholder="Repetir Senha"> <br>
            <input type="submit" value="Cadastrar">
        </form>

    </section>

</body>
</html>