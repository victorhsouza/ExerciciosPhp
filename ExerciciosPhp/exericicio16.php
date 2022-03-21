<?php
    $vetor = array(5,4,3,22,11,120,51,57,63);

    foreach($vetor as $valor){
        if($valor % 2 == 0){
            echo "$valor = par".PHP_EOL;
        }
        else{
            echo "$valor = impar".PHP_EOL;
        }




    }


?>