<?php

$Numero = $_GET["numero"];

if($Numero % 10 == 0){
        echo "$Numero é divisivel por 10";
    }
    else if($Numero % 5 == 0){
        echo "$Numero é divisivel por 5";
    }
    else if($Numero % 2 == 0){
        echo "$Numero é divisivel por 2.";
    }
    else
    {
        echo "$Numero nao e divisivel por 10, 5 ou 2.";
    }


