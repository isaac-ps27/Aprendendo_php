<?php

    $a = 1.5;
    $b = 2.5;
    $c = 3; //inteiro
    $d = "teste"; //string

    if (is_float($a) && is_float($b)) { //true
        echo "As variáveis são do tipo float. 1 <br>";
    } 

    if (is_float(10)) { //false
        echo "A variável é do tipo float. 2 <br>";
    } 

    if (is_float("$c")) { //false, pois é uma string
        echo "A variável é do tipo float. 3 <br>";
    }

    if (is_float($d)) { //false, pois é uma string
        echo "A variável é do tipo float. 4 <br>";
    }

    if (is_float(1.5)) { //true
        echo "A variável é do tipo float. 5 <br>";
    }

?>