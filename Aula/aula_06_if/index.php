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
         $arr = array("uva","pera","maça");
         
         $arr2 = [	"fruta-1" => "uva",
                        "fruta-2" => "pera",
                        "fruta-3" => "maça"];

         $arr3 = [];
         $arr3[10] = 1000;
         $arr3[5] = "Caderno";

         echo "<pre>";
         print_r($arr);
         print_r ($arr2);
         print_r ($arr3);
         echo "</pre>";
         
         $array = array(	1 => "a",
		"1" => "b",
		1.8 => "c",
		true => "d");

         print_r($array);
         
         echo $arr2["fruta-2"];
        // echo $arr2[-50]; //não vai rodar pq não tem valor atribuido
         $arr = array("uva", "pera", 8 => "maça", "banana", "manga");
         echo "<pre>";
         print_r($arr);
         echo "</pre>";
         
         
$arr = array("uva", "pera", 8 => "maça", "banana", "manga", 20 => array("figo","pera"));

echo $arr[20][0];



        ?>
    </body>
</html>
