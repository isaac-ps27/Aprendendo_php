<?php

    echo 5 / 2;
    echo "<br>";

    if (is_float(5 / 2)) {
        echo "O resultado é um float. <br>";
    } 

    echo 2 . 3;
    echo "<br>";

    if (is_string(2 . 3)) {
        echo "O resultado é uma string. <br>";
    } 

    $nome = "Isaac";
    $sobrenome = "Passos";

    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto . "<br>";

?>