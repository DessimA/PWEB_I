<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
               
        echo"Questão 08<br/><br/>";
        //Inserir valor de total no final da url  ex. ?total=10
        $t=$_GET["total"];
        $soma=0;
        for ($i = 1; $i<=$t; $i++){
            $soma+=$i;
          
        }echo "A soma é igual a $soma";
        
        echo"<br/><br/>Questão 09<br/><br/>";
             
        $numero = 37;
        $x=0;
        while ($x!=37){
            $gera = rand(1,50);
            echo "$gera ";
            if($gera == $numero){
            $x=37;}
        }
        
          echo"<br/><br/>Questão 10<br/><br/>";
             
        $numero = 1000;
        $y=0;
        $sm=0;
        while ($y!=10){
            $ale = rand(1,100);
            $sm+=$ale;
            echo "$sm ";
            if($sm >= $numero){
            $y=10;}
        }
        
        echo"<br/><br/>Questão 11<br/><br/>";
        echo "<table border=1>";
        for($lin = 1; $lin<= 10; $lin++){
            echo "<tr>";
            for($col = 1; $col<= 5; $col++){
		echo "<td>L $lin | C $col</td>";
	}echo "</tr>";
        }echo "</table>";
        
          echo"<br/><br/>Questão 12<br/><br/>";
             
        $mtres=0;
        while ($mtres<=100){
            $mtres+=3;
            if($mtres<=100){
            echo "$mtres ";
            
            }
        }
        
          echo"<br/><br/>Questão 13<br/><br/>";
             
        $msete=0;
        $ssete=0;
        while ($msete<=10000){
            $msete+=7;
            if($msete<=10000){
            $ssete+=$msete;
            
            }
                       
        }echo "$ssete ";
        
           echo"<br/><br/>Questão 14<br/><br/>";
             
        $quin=500;
        for($a=10; $quin>=10;$quin--){
            echo "$quin ";
        }
        
        echo"<br/><br/>Questão 15<br/><br/>";
        $tb=$_GET["tabela"];
        echo "<table border=1>";
        for($linI = 1; $linI<= $tb; $linI++){
            echo "<tr>";
            for($colI = 1; $colI<= 5; $colI++){
		echo "<td>L $linI | C $colI</td>";
	}echo "</tr>";
        }echo "</table>";
        
         echo"<br/><br/>Questão 16<br/><br/>";
        $mat=$_GET["tabuada"];
        $multi=0;
        for($b=1;$b<=10;$b++){
            echo "$mat x $b = ".$mat*$b.'<br/>';
            
        }
        
        ?>
        
        
    </body>
</html>