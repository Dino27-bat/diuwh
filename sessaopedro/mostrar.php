<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra os dados salvos na sessão</title>
    <style>
        body{
            background-color: #808B96;
            color:#1C2833;
    }
    </style>
</head>
<body>
    <center>
    <?php
        session_start();
        echo "<h3>EXIBE OS DADOS SALVOS NA SESSÃO</h3>";
        $nome = $_SESSION["nome"];
        $email = $_SESSION["email"];

        echo "<strong>Nome: </strong>" .$nome;
        echo "<br>";
        echo "<strong>E-mail: </strong>" .$email;
    ?>
    <p><a href="index.php">Voltar</p>
    </center>
</body>
</html>