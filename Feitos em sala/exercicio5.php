<?php 
    $sexo = readline("Informe o sexo: [M] [F]: " );

    if ($sexo == "F" && $sexo == "M") {
        echo "Sexo Válido";
    }
    else{
        echo "Sexo Invalido";
    }

?>