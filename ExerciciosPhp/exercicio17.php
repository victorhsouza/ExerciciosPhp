<?php
    $vetor = array(50,4,30,20,10);
    $elementos = count($vetor);

    $numMaior = max($vetor);
    $numMenor = min($vetor);
    $pares = 0;
    $totPar = 0 ;

    foreach($vetor as $valor){
        if($valor % 2 == 0){
            $pares+=1;
        }
    }

    $totPar = ($pares / $elementos) * 100;


    echo "O maior numero é: $numMaior" .PHP_EOL;
    echo "O menor numero é: $numMenor".PHP_EOL;
    echo "A porcentagem de numeros pares é: $totPar%";
   


?>