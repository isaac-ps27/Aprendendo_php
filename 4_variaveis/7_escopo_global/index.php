<?php

    $teste = "asd";

    echo "$teste global 1 <br>";

    if(5 > 2){

        $teste = "dsa";
        echo "$teste if <br>";

    }

    echo "$teste global 2 <br>";

    function teste(){

        global $teste;
        $teste = 2;
        echo "$teste function <br>";

    }

    teste();

    echo "$teste global 3 <br>";




?>