<?php

    /*
        Evaluation constructs    
        Empty valida se:
            1- Variavel não existe retorna true
            2- Se for false, 0, null, '' retorna true
            3- se array for vazio ($arr = []) retorna true    
    */
    
    $varOne = 'echo "My test";';

    echo eval($varOne);
?>