<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_cadastro.css">
    <style>
        h3, h4 {
            color:white;
            text-align:center;
        }
    </style>
    <title>Apostas Online</title>
</head>
<body>
    <section>
        <nav class="menu">
            <ul>
                <li>Home</li>
                <li>Cadastro</li>
                <li>Notícias</li>
                <li>Login</li>
            </ul>
            <br>
        </nav>
        <form action="request.php" method="POST">

            <fieldset> <legend><strong></strong></legend>
                <br>
                    <?php

                        $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $usuario = $_POST['usuario'];

                        echo "<h3>Olá $usuario</h3><br>";
                        echo "<h4>Seja bem vindo a nossa plataforma!</h4>"

                    ?>
                    <a href="cadastro.html"><input type="button" name="submit" id="submit" value="Continuar"></a>
                <br><br>
            </fieldset>
        </form>
    </section>
    <footer>

    </footer>
</body>
</html>