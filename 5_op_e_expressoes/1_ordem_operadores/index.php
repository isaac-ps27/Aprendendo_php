<?php

    echo 10 + 20 * 3; // Multiplication takes priority over addition
    echo "<br>";
    echo (10 + 20) * 3; // Parentheses take priority over multiplication 
    echo "<br>";
    echo 5 + 2 / 10; // Division takes priority over addition
    echo "<br>";


    $a = 10;
    $b = 20;
    $c = 2; 

    echo $a + $b * $c; // Multiplication takes priority over addition
    echo "<br>";
    echo $c + $a / $b; // Division takes priority over addition
    echo "<br>";

    $d = $a + $b * $c; // Multiplication takes priority over addition
    echo $d; // Output: 50
    echo "<br>";

?>