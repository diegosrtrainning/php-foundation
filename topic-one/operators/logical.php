<?php
    $value1 = 'positive';
    $value2 = 'negative';

    // AND (ou) &&
    echo 'and validation: '; 
    if($value1 === 'positive' && $value2 === 'negative'){
        echo "have values\n";
    } else {
        echo "no values\n";
    }    

    //XOR (ou) ^
    echo 'xor validation 1: ';
    if($value1 === 'positive' ^ $value2 === 'negative'){
        echo "have values\n";
    } else {
        echo "no values\n";
    }
        
    echo 'xor validation 2: ';    
    if($value1 !== 'positive' xor $value2 === 'negative'){
        echo "have values\n";
    } else {
        echo "no values\n";
    }

    $value3 = 'bla';
    echo 'xor validation 3: ';    
    /*$value1 === 'positive' xor $value2 !== 'negative' (TRUE)  xor $value3 === 'bla' (TRUE)
        Então: TRUE xor TRUE = false
    */
    if($value1 === 'positive' xor $value2 !== 'negative' xor $value3 === 'bla'){
        echo "have values\n";
    } else {
        echo "no values\n";
    }

    $value4 = 'bla4';
    echo 'xor validation 4: ';    
    /* (TRUE, FALSE) = TRUE
       (TRUE, TRUE) = false 
       Então: nem compara o terceiro XOR
    */
    if($value1 === 'positive' xor $value2 !== 'negative' xor $value3 === 'bla' xor $value4 !== 'bla4'){
        echo "have values\n";
    } else {
        echo "no values\n";
    }


    //OR
    $value1 = 10;
    $value2 = 20;
    $value3 = false;
    $value4 = false;

    echo "OR validation 1: ";
    /* A condição $value1 === 10 and $value2 === 10 é falsa,
        mas é executado primeiro a clausula or
    */
    if($value1 === 10 and $value2 === 10 || $value3 === $value4){
        echo "Falso positivo";
    }

    //Precedence
    $value1 = 2;
    $value2 = 4;
    $value3 = 6;

    echo $value1 + $value2 * $value3 . "\n";
    echo ($value1 + $value2) * $value3 . "\n";
    

?>