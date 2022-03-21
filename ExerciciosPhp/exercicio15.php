<?php
    $massa = 0.30;
    $i = 0;
    $minutos;

    while($massa >= 0.10 ){
        $massa -= ($massa * 0.25);
        $i += 30;
    }

    $minutos = $i / 60;
    echo "Serão necessarios $i segundos para reduzir a massa menos de 0.10 \n";
    echo "Serão necessarios $minutos minutos para reduzir a massa menos de 0.10";


?>