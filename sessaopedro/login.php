<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Acesso</title>
    <style>
        body{
            background-color: #808B96;
            color:#1C2833;
    }
    </style>
</head>
<body>
    <form name="login" method="post" action="">
        <center><caption>LOGIN DE ACESSO</caption>
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" maxlength="40" required>
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" maxlength="30">
        </p>
        <p>
            <input type="submit" name="enviar" value="Enviar">
        </p>
    </form>
    <?php
        if(isset($_POST["enviar"]))
        {
            $nome = $_POST["nome"];
            $email = $_POST["email"];

            session_start();
            $_SESSION["nome"] = $nome;
            $_SESSION["email"] = $email;
        }
    ?>
    <p><a href="index.php">Voltar</a></p></center>
</body>
</html>