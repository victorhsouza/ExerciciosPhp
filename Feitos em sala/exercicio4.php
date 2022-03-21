<?php 
   $nota1 = readline("Insira um numero: ");
   $nota2 = readline("Insira um numero: ");
   $nota3 = readline("Insira um numero: ");

   $media = ($nota1 + $nota2 + $nota3)/3;

   if ($media >= 7) {
       echo "O aluno esta aprovado com media $media!";
   }
   elseif($media <= 5){
       echo "O aluno esta reprovado com media $media";
   }
   else{
       echo "O aluno esta de recuperação com media $media";
   }
  




?>