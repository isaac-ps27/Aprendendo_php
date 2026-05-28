<?php

    $pessoa = [
        "nome" => "isaac",
        "sobrenome" => "Passos",
        "idade" => 20,
        "cor" => "branco",
        "altura" => 1.75
    ];

    if ($pessoa["idade"] >= 18) {
        echo "A pessoa é maior de idade.";
    } else {
        echo "A pessoa é menor de idade.";
    } 

?>