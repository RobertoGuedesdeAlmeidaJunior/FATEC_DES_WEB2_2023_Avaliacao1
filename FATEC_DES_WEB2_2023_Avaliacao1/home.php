<?php
// Inicializa uma sessão
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ //caso o usuário não esteja logado o programa irá mandar ele voltar para o index.
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1 class="title">Cadastro dos veiculos</h1>
    <h2 class="title">Bem Vindo!</h2>
    <a href="./cadastrar.php"><button class= "opcao btn btn-primary">Cadastrar veiculos</button></a>
    <a href="./cadastro.php"><button class= "opcao btn btn-primary">Ver cadastros</button></a>
    <a href="./sair.php" ><button class= "opcao btn btn-danger">Sair</button></a>
    <br>
    <img id="fatec" src="./images.jpeg">




</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
