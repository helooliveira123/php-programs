<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS link -->
    <link rel="stylesheet" href="css/style.css">
    <title>INTERMEDIÁRIOS</title>
</head>
<body>
   <form action="" method="post">
        <h6>Digite um número</h6>
        <input type="text" name="valor1" required>
        <h6>Digite um número</h6>
        <input type="text" name="valor2" required>
        <div class="btn">
            <input type="submit" value="IMPRIMIR">
        </div>

        <?php
            if($_POST){
                $v1=$_POST['valor1'];
                $v2=$_POST['valor2'];
                $i=$v1+1;
                while($i<$v2){
                    $valores[]= $i." ";
                    $i++;
                }
                $string=implode($valores);
                echo("<p> Os intermediários de $v1 e $v2, são: <br> $string </p>");
            }
        ?>
   </form>
</body>
</html>