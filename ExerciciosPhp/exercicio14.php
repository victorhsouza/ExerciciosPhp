<?php

    $chico = 1.50;
    $juca = 1.10;
    $ano = 0;
    
    
   /*do{
    $juca += 0.3;
    $chico += 0.2;
    $i++;

   }while($chico >= $juca);*/
   
    /*for($i = 1; $chico <= $juca; $i++){
        $juca += 0.3;
        $chico += 0.2;
   }*/
    
    
    while($juca <= $chico){
        $juca += 0.03;
        $chico += 0.02;
        $ano++;
    }

    echo "Serão necessários $ano anos.\n";
    echo "Altura do Juca: $juca \n";
    echo "Altura do Chico: $chico"


?>