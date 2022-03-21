<?php
     $media;
     $nota1 = readline("Primeira nota: ");
     $nota2 = readline("Segunda nota: ");
     $nota3 = readline("Terceira nota: ");
     $nota4 = readline("Quarta nota :");

     $media = ($nota1 + $nota2+ $nota3 + $nota4)/4;

    echo $media >= 6 ? "Aprovado" : "Reprovado" .PHP_EOL;

    


    /* if ($media >= 6) {
         echo "Aprovado";
     }
     else{
         echo "Reprovado";
     }*/

?>