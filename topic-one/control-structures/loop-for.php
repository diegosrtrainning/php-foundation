<?php

    /*
        Parametros:
            Primeiro: Inicia a variavel de contagem
            Segundo: Condição a ser atendida para iteração continuar. A teração é interrompida caso false
            Terceiro: Executado ao final de cada loop e incrementa a variável criada no primeiro parametro
     */

     for ($c=1; $c <= 5; $c++) { 
         echo "The control variable is $c" . PHP_EOL;
     }
?>