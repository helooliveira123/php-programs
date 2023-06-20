<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS link -->
    <link rel="stylesheet" href="css/style.css">
    <title>IMPRESSÃO SOL</title>
</head>
<body>
    <form action="" method="post">
        <h6>Digite um número</h6>
        <input type="text" placeholder="Número maior que 0" name="valor1" required>
        <div class="btn">
            <input type="submit" value="IMPRIMIR">
        </div>
            
        <div class="sol-resposta">
            <?php
                include('funcoes.php');
                if($_POST){
                    $v1=$_POST['valor1'];
                    if($v1<=0){
                        echo("<p>Número inválido! Tente novamente.</p>");
                    }else{
                        sol($v1);
                    }
                }
            ?>
        </div>
    </form>
</body>
</html>