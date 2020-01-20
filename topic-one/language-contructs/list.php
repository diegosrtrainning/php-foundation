<?php
    echo "list 1: \n";
    $fruits = ["Apples", "Oranges", "Bananas"];
    list($fruitOne, $fruitTwo,$fruitThree) = $fruits;
    echo "My fruits include: " . $fruitOne . "," . $fruitTwo . "," .$fruitThree . ".";

    echo "\n\nlist 2: \n";
    list(0 => $a, 1 => $b, 2 => $c)  = $fruits;
    echo "My fruits include: " . $a . "," . $b . "," .$c . ".";

    echo "\n\nlist 3: \n";    
    [$fruitOneA, $fruitTwoA,$fruitThreeA] = $fruits;
    echo "My fruits include: " . $fruitOneA . "," . $fruitTwoA . "," .$fruitThreeA . ".";
?>