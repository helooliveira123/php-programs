<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS link -->
    <link rel="stylesheet" href="css/style.css">
    <title>PARES E ÍMPARES</title>
</head>
<body>
    <form action="" method="post">
        <h6>Digite vinte números (postivos e negativos)</h6>
        <input type="text" placeholder="Separe-os por vírgula" name="valores">
        <div class="btn">
            <input type="submit" value="IMPRIMIR">
        </div>

        <?php
            include('funcoes.php');
            if($_POST){
                $valores=$_POST['valores'];
                par_impar($valores);
            }
        ?>
    </form>
</body>
</html>