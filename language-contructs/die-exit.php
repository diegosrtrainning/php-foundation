<?php

    /* Poderia usar a função die, 
    não há diferença entre ambas, produzem o mesmo 
    efeito de ecerrar a aplicação*/
    for ($i=0; $i < 5; $i++) { 
        echo "iteration $i".PHP_EOL;
        exit("Abortando");
    }    
?>