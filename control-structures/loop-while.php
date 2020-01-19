<?php
    // While é executado até que a condição seja falsa
    $counter = 0;
    $maxCounter = 5;

    while($counter < $maxCounter){
        echo "Iteration $counter".PHP_EOL;
        $counter++;
    }


    //Curiosidade
    echo "\n\nCuriosidade:\n";
    $counter = 0;
    while($counter++ < $maxCounter){
        echo "Iteration $counter".PHP_EOL;        
    }
?>