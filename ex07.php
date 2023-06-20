<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS link -->
    <link rel="stylesheet" href="css/style.css">
    <title>VETOR</title>
</head>
<body>
   <form action="" method="post">
        <h6>Vetor</h6>
        <div class="vetor"><p>1 2 3 4 5 6 7 8 9 10 11 12 13 14 15</p></div>
        <div class="btn">
            <input type="submit" value="IMPRIMIR" name="btn">
        </div>

        <div class="vetor-resposta">
            <?php
            $valores=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);
            if(isset($_POST['btn'])){
                foreach ($valores as $valor){
                    if($valor%2==0){
                        echo("<p>".$valor." -> par</p>");
                    }else{
                        echo("<p>".$valor." -> ímpar</p>");
                    }
                }
            }
            ?>
        </div>
   </form>
</body>
</html>