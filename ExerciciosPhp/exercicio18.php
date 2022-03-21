<?php 
    $vetor1 = array(5,6,7,8,9);
    $vetor2 = array(5,4,3,2,1);

    $vetor3 = array_diff($vetor1,$vetor2);

    foreach($vetor3 as $valor){
        echo "$valor ";
    }
?>