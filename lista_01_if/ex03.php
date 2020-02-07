<?php

$Nome = $_POST["nomecompleto"];
$Idade = $_POST["idade"];
$Sexo = $_POST["sexo"];


if($Sexo == 'F' && $Idade < 18){
    
        echo "ACESSO PROIBIDO<br/>";
        
    }
    else
    {
        echo "Seja bem vindo(a) $Nome, acesso autorizado!";
    }


