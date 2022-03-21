<?php
    $lado1 = 5;
    $lado2 = 6;
    $lado3 = 8;

    if($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3){
        echo "É um triangulo escaleno";
    }
    elseif($lado1 == $lado2 && $lado1 == $lado3){
        echo "É um triangulo equilatero";
    }

    elseif($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3){
        echo "É um triangulo isosceles";
    }
    

?>