<?php
        $numeros = 0;
        $contador=0;

        
        for($i = 1; $i <= 5; $i++){
            $numeros = readline("Insira um numero: ");
            
            if($numeros == 0){
                echo "Operação cancelada \n";
                break;
            }

            elseif($numeros >= 100 && $numeros <= 200){
                $contador += 1;
            }
        }
        echo "Foram digitados $contador numeros entre 100 e 200";
        


?>