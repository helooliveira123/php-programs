<?php
    // Questão 1 e 9
    function sequencia($s){
        for($i=1; $i<=$s; $i++){
            echo $i." ";
        }
    }
    
    function fatorial($f){
        $fatorial=1;
        $i=1;
        while($i<=$f){
            $fatorial*=$i;
            $i++;
        }
        echo $fatorial;
    }

    // Questão 2
    function sol($sol){
        $i=1;
        while ($i<=$sol){
            echo("<p>SOL</p>");
            $i++;
        }
    }

    //Questão 3
    function par_impar($numeros){
        $quebra_numeros=explode(",", $numeros);
        $positivos=array();
        $negativos=array();
        foreach ($quebra_numeros as $numero){
            if ($numero >= 0){
                array_push($positivos, $numero);
            }else{
                array_push($negativos, $numero);
            }
        }
        echo("<p> A soma dos números positivos dá ".array_sum($positivos)." e você digitou ".count($negativos)." número(s) negativos</p>");
    }

    //Questão 4
    function verificar($numeros){
        $quebra_numeros=explode(",", $numeros);
        $qtd_numeros=array();
        foreach ($quebra_numeros as $numero){
            if ($numero == 0){
                echo("<p>Erro! Número 0 adicionado. Até o número 0:</p>");
                break;
            }elseif ($numero>100 and $numero<200){
                array_push($qtd_numeros, $numero);
            }
        }
        echo("<p> Você digitou ".count($qtd_numeros). " número(s) entre 100 e 200 </p>");
    }

    //Questão 5
    function altura(){
        $anos=0;
        $juca=110;
        $chico=150;
        while($juca<=$chico){
            $chico+=2;
            $juca+=3;
            $anos++;
        }
        echo("<p>".$anos."</p>");
    }

    //Questão 6
    function massa($m){
        $segundos=0;
        while($m>=0.10){
            $m-=$m/4;
            $segundos+=30;
        }
        $min=$segundos/60;
        echo("<p> $segundos segundos ($min minutos). <br> Massa final: $m</p>");
    }

    //Questão 8
    function imprimir($imp){
        $i=0;
        while ($i<=$imp){
            echo $i." ";
            $i++;
        }
    }
?>