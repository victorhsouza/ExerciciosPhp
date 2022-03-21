<?php
  
   $bebida = "";
   $codigo = readline("Codigo: ");
   $quantidade = readline("Quantidade: ");

   switch ($codigo) {
       case '100':
           $pedido = $quantidade * 1.10;
           $pedido = number_format( $pedido, 2, '.', ',');
           echo "Valor total: $pedido";
           
           break;

       case '101':
           $pedido = $quantidade * 1.30;
           break;
       
       default:
           echo "Codigo invalido";
           break;
   }


?>