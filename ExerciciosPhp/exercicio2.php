<?php
        $numero = 150;

        if($numero % 10 == 0){
            echo "$numero é divisivel por 10".PHP_EOL;
        }

        if($numero % 5 == 0){
            echo "$numero é divisivel por 5".PHP_EOL;
        }

        if($numero % 2 == 0){
            echo "$numero é divisivel por 2".PHP_EOL;
        }
        else{
            echo "O numero não é divisivel por 10, 5 ou 2!";
        }

?>