<?php declare (strict_types = 1); ?> <!-- tem que estar na primeira linha -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
       
        //global aqui a função não lê a variavel global nome, por isso erro
        echo "Teste 01<br/>";
        $nome="João";
        function escreverNome(){
            global $nome;
            $nome="Eva";
            echo $nome."<br/>";
        }
        echo $nome."<br/>";
        escreverNome();
        echo $nome."<br/>";
        //função aqui a função declara dentro o valor para nome assim ele imprimi o valor da função
        echo "<br/>Teste 02<br/>";
        $nome="Maria";
        
        function mostrarNome(){
            $nome="José";
            echo $nome;
        }
        mostrarNome();
        echo "<br/>". $nome;
        
        //novo teste
        echo "<br/>";
        echo "<br/>Teste 03<br/>";
        
        $nome = "Ana ";
        function escrever($n){
            $n.="Beatriz";
            print $n."<br/>";
        }
        escrever($nome);
        print $nome."<br/>";
       
        //novo teste
        
        echo "<br/>Teste 04<br/>";
        
        
        function mult(int $a,int $b):int{
            return $a*$b;
            
        }
        print mult(5,8);
        ?>
    </body>
</html>
