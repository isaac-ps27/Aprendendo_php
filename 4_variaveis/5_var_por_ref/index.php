<?php

    $x = 10;

    $y = &$x; // $y é uma referência para $x

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 15;

    echo "Após modificar \$y:<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $x = 20;

    echo "Após modificar \$x:<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    



?>