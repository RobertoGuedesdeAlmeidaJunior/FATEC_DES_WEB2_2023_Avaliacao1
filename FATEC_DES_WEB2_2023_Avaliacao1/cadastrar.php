<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ //caso usuário entrar sem o login o site reenviará para o index
        header("location: index.php");
        exit;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if( $_POST['nome'] != ""  &&   $_POST['placa'] != "" && $_POST['Ra'] != "")  {
            $nome = $_POST['nome'];
            $placa = $_POST['placa'];
            $Ra = $_POST['Ra'];
            $filename = "cadastro.TXT";
        
            // ATENCAO: Verificar se o arquivo existe
            if (!file_exists($filename)) {
                // Abrir no Modo Write
                $handle = fopen($filename, "w");
            } else {
                // Abir no Modo Append
                $handle = fopen($filename, "a");
            }
            fwrite($handle," $nome|$Ra|$placa  \n");
            fclose($handle);
            header("location: home.php");
        }
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
<h1 class="title">Cadastro dps veiculos</h1>
    <div class="wrapper">
        <form action="cadastrar.php" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" value="">

            </div>    

            <div class="form-group">
                <label>Ra</label>
                <input type="text" name="Ra" class="form-control" value="">
            </div>

            <div class="form-group">
                <label>Placa</label>
                <input type="text" name="placa" class="form-control" value="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" value="Cadastrar">Cadastrar</button>
            </div>     
        </form>
    </div>    
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>