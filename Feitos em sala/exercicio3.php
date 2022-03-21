<?php
    $numero = readline("Insira um numero: ");

    if ($numero > 0) {
        echo "O numero $numero é positivo";
    }
    elseif($numero < 0) {
        echo "O numero $numero é negativo";
    }
    else {
        echo "O numero é 0";
    } 
        
    
?>