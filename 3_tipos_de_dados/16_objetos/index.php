<?php

    class Pessoa {

        function falar() {
            echo "Olá pessoal!";
        }
    }

    $isaac = new Pessoa();

    $isaac->nome = "Isaac";

    echo $isaac->nome;
    echo "<br>";
    $isaac->falar();

?>