<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo"Questão 01<br/><br/>";
        for ($x = 1; $x<=100; $x++){
            echo "É possível repetir várias linhas no PHP. Esta linha foi repetida $x vezes<br/>";
            
        }
        
        echo"<br/>Questão 02<br/><br/>";
        
        $t=$_GET["total"];
        for ($i = 1; $i<=$t; $i++){
            echo "É possível repetir várias linhas no PHP. Esta linha foi repetida $i vezes<br/>";
            
        }
        echo"<br/>Questão 03<br/><br/>";
        $soma=0;
        for ($z = 1; $z<=100; $z++){
            $soma=$soma+$z;
            
        }
        echo "A soma de 0 até 100 é $soma <br/>";
        
        echo"<br/>Questão 04<br/><br/>";
        for ($a = 1; $a<=100; $a++){
            echo " $a ";
            
        }
        
        echo"<br/><br/>Questão 05<br/><br/>";
        for ($b = 1; $b<=100; $b++){
            $b+=1;
            echo " $b ";
            
        }
        ?>
        
        
    </body>
</html>
