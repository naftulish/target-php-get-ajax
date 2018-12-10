<?php

    if(isset($_GET["plus1"]) && $_GET["plus1"]!="" && $_GET["plus2"]!="" ){
        $num2 = (int)$_GET["plus1"];
        $num1 = (int)$_GET["plus2"];
        $sum = $num1 + $num2;
        echo "$num1 + $num2 = $sum";
    }

    if(isset($_GET["minus1"]) && $_GET["minus1"]!="" && $_GET["minus2"]!="" ){
        $num2 = $_GET["minus1"];
        $num1 = $_GET["minus2"]; 
        $sum = $num1 - $num2;
        echo "$num1 - $num2 = $sum";
    }

    if(isset($_GET["dub1"]) && $_GET["dub1"]!="" && $_GET["dub2"]!="" ){
        $num2 = $_GET["dub1"];
        $num1 = $_GET["dub2"]; 
        $sum = $num1 * $num2;
        echo "$num1 * $num2 = $sum";
    }

    if(isset($_GET["divi1"]) && $_GET["divi1"]!="" && $_GET["divi2"]!="" ){
        $num2 = $_GET["divi1"];
        $num1 = $_GET["divi2"]; 
        $sum = $num1 / $num2;
        echo "$num1 / $num2 = $sum";
    }

?>
