<?php
    /*BITWISE = BIT A BIT
    Tabela binária: http://devloopthings.blogspot.com/2011/04/o-alfabeto-em-codigo-binario-ansii.html

    Operador & (and)
    Operador | (or)
    Operador ^ (xor)
    Operador ~ (not)
    Operador >> (right shift)
    Operador << (left shift)*/

    /*and
    O operador & compara os bits de cada variável um por um, 
    quando os dois bits (um da variável "a" e outro da variável "b") 
    são iguais a 1 (bit ligado), o retorno é 1. Caso contrário, o retorno é 0.*/
    $a = 1; // 0000 0001
    $b = 5; // 0000 0101

    $c = $a & $b; // 0000 0001

    /*or
    O operador | também compara os bits de cada variável um por um, 
    quando pelo menos um dos bits é igual a 1, o retorno é 1. Caso contrário, o retorno é 0.*/

    $a = 1; // 0000 0001
    $b = 5; // 0000 0101

    $c = $a | $b; // 0000 0101

    /*xor
    O operador ^ compara os bits de forma que, 
    se os 2 bits (um da variável "a" e outro da variável "b") forem iguais ele, 
    retorna 0. Caso contrário, ele retorna 1.*/
    $a = 1; // 0000 0001
    $b = 5; // 0000 0101

    $c = $a ^ $b; // 0000 0101

    /*not
    O operador ~ inverte os bits de uma variável, onde era 1 fica 0 e onde era 0, fica 1.*/
    $a = 1; // 0000 0001

    $b = ~$a; // 1111 1110

    /*<< (LEFT SHIFT) E >> (RIGHT SHIFT)    
    Os operadores << e >> fazem o deslocamentos dos bits para direita e para a esquerda. 
    Preenchendo o restante com 0.*/
    $a = 1; // 0000 0001
    $b = $a << 2; // 0000 0100

    $c = $b >> 2; // 0000 0001
?>
