<?php

$N1 = $_POST["n1"];
$N2 = $_POST["n2"];

$soma = $N1+$N2;

if($soma > 20){
    
        echo "$soma maior do que 20<br/>";
        $soma+=8;
        echo "Então recebe mais 8, agr igual a $soma";
    }
    else if($soma <= 20){
        echo "$soma menor/igual a 20<br/>";
        $soma-=5;
        echo "Então decresce 5, agr igual a $soma";
    }
    else
    {
        echo "Valor invalido";
    }


