<?php 
        $numero1 = 21;
        $numero2 = 1;
        $soma = $numero1 + $numero2;
        

        if($soma > 20){
                $soma += 8;
                echo "($numero1 + $numero2) + 8  = $soma"; 
        }

        if($soma <= 20){
                $soma -= 5;
                echo "($numero1 + $numero2) - 5  = $soma"; 
        }



?>