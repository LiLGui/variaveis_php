<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="all">
<div class="white">
    <a href="#">logo</a>
</div>
<h2>Atendimento em casa</h2>
<hr>
<header>
    
</header>
<section>
    <?php
        $nome = $_POST['nome_user'];
        echo "<h3>Olá ".$nome."<h3>";
    ?>
    <div class="resposta">
        <h2>Cadastro realizado com sucesso!</h2>
        <a href="consulta.php"><input type="submit" class="pxt" name="" id="" value="Acompanhar minha consulta"></a>
        <a href="index.html"><input type="submit" class="pxt" name="" id="" value="Voltar ao cadastro"></a>
    </div>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere reiciendis omnis recusandae magnam quibusdam aspernatur autem cumque, quidem fugiat, aut ratione. Aperiam accusantium corrupti praesentium porro perferendis fugit ullam dolor!</p>
</section>
<footer>
    <div class="white1">
    Imagem rodapé
    </div>
    <p>Todos os direitos reservados - 2021 -<a href="https://www.instagram.com/willtry.tar/" target="_blank"> @Rafael William</a></p>
</footer>
</div>
</body>
</html>