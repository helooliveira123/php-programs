<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS link -->
    <link rel="stylesheet" href="css/style.css">
    <title>USINA</title>
</head>
<body>
   <form action="" method="post">
        <h6>Sabendo que um material perde 25% de sua massa a cada 30 segundos, qual o tempo necessário para que sua massa seja menor que 0.10?</h6>
        <input type="text" placeholder="Digite a massa do material" name="valor1" required>
        <div class="btn">
            <input type="submit" value="CALCULAR">
        </div>

        <?php
            include('funcoes.php');
            if($_POST){
                $v1=$_POST['valor1'];
                massa($v1);
            }
        ?>
   </form>
</body>
</html>