<?php

    // Igualdade
    echo (0 == false).PHP_EOL; // true
    echo ("123" == 123).PHP_EOL; // true
    echo ("one" == 1).PHP_EOL; // false
    echo (123.0 == 123).PHP_EOL; // true
    echo "fim";

    //Diferença
    echo (0 != false).PHP_EOL; // false
    echo ("123" != 123).PHP_EOL; // false
    echo ("one" != 1).PHP_EOL; // true
    echo (123.0 != 123).PHP_EOL; // false
    echo "fim";

    //Valor e tipo
    echo (0 === false).PHP_EOL;
    echo ("123" === 123).PHP_EOL;
    echo ("one" === 1).PHP_EOL;
    echo (123.0 === 123).PHP_EOL;
    echo "fim";

    //Valor e tipo com negação
    echo (true !== false).PHP_EOL; // true

    // Greater than
    $x = 100;
    $y = 50;

    var_dump($x > $y); // true

    // Less than
    $x = 100;
    $y = 50;

    var_dump($x < $y); // false

    /* Maior igual que
    CUIDADO: => trata-se da criação de um array */
    $x = 50;
    $y = 50;

    var_dump($x >= $y); // true

    // Menor igual que
    $x = 49;
    $y = 49;

    var_dump($x <= $y); // true
?>