<?php
    // Parecido com o While, mas é executado pelo menos uma vez
    $counter = 0;
    $maxCounter = 5;

    do {
        echo "Iteration $counter".PHP_EOL;
    } while($counter++ < $maxCounter);
?>