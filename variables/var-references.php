<?php

    //Recebe o valor da variavel 1
    $varOne = "Hello World";
    $varTwo = $varOne;
    $varOne = "Have a nice day";

    echo $varTwo;

    // Recebe a referencia da variavel 1 (mesmo espaço de alocação da memória)
    $varOne = "Hello World";
    $varTwo = &$varOne;
    $varOne = "Have a nice day";

    echo $varTwo;

    // $varTwo se torna Alias de $varOne
    $varTwo = "Have a nice day eeeeeeeee";
    echo $varOne;

?>