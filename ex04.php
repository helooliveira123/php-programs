<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS link -->
    <link rel="stylesheet" href="css/style.css">
    <title>NÚMEROS</title>
</head>
<body>
    <form action="" method="post">
        <h6>Digite alguns números</h6>
        <input type="text" placeholder="Separe-os por vírgula" name="valores" required>
        <div class="btn">
            <input type="submit" value="VERIFICAR">
        </div>
    
        <?php
            include('funcoes.php');
            if($_POST){
                $valores=$_POST['valores'];
                verificar($valores);
            }
        ?>
    </form>
</body>
</html>