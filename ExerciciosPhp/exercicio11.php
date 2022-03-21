<?php
    $numero = 5;
    $soma;
    $mult;
    $divisao;
    $sub;


    for($i = 1; $i <= 10; $i++){
        $soma = $numero + $i;
        echo "$numero + $i = $soma" .PHP_EOL;
    }
    echo "".PHP_EOL;


    for($i = 1; $i <= 10; $i++){
        $sub = $numero - $i;
        echo "$numero - $i = $sub". PHP_EOL;
    }

    echo "".PHP_EOL;

    for($i = 1; $i <= 10; $i++){
        $mult = $numero * $i;
        echo "$numero * $i = $mult". PHP_EOL;
    }

    echo "".PHP_EOL;

    for($i = 1; $i <= 10; $i++){
        $divisao = $numero / $i;
        printf("%d / %d = %.1f \n",$numero, $i, $divisao);
    }

?>