<?php
    $numeros = 5;
    $insert = 0;
    $soma = 0;
    $totalNegativos = 0;
    

    for($i = 1; $i <= $numeros; $i++){
        $insert = readline("Informe o $i numero:");

        if($insert >= 0){
            $soma += $insert;
        }

        else
        
            $totalNegativos += 1;
        }
    
    echo "A soma dos positivos é: $soma". PHP_EOL;
    echo "O total de negativos é: $totalNegativos";
    
   
    



?>