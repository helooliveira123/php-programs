<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS link -->
    <link rel="stylesheet" href="css/style.css">
    <title>ALTURA</title>
</head>
<body>
    <form action="" method="post">
        <h6>Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Quantos anos serão necessários para que Juca seja maior que Chico?</h6>
        <div class="btn">
            <input type="submit" value="RESPOSTA" name="bt">
        </div>
        
        <?php
            include('funcoes.php');
            if(isset($_POST['bt'])){
                altura();
            }
        ?>
    </form>
</body>
</html>