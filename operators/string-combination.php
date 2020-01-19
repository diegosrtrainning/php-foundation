<?php
    echo "Estou "." concatenando";

    $texto = "Tambem estou ";
    $texto .= "concatenando\n";

    echo $texto;

    $texto = "Tambem estou ";
    $texto =  $texto ."concatenando\n";    

    echo $texto;

    //Diferença de " (aspa dupla) e simples
    $texto2 = "(2) meu texto\ncom quebra";
    echo $texto2;
    $texto3 = ' (3)meu texto\ncom quebra'; // não aceita sequencias de escape (https://www.php.net/manual/pt_BR/language.types.string.php)
    echo $texto3;
?>