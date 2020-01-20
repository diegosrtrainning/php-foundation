<?php 
    $obj1 = new stdClass();
    $obj2 = clone $obj1;

    $array1 = [$obj1];
    $array2 = [$obj2];

    var_dump($array1 == $array2); //true
    var_dump($array1 === $array2); // false
?>