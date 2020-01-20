<?php
    $arrayUm  = ['a' => 'Apples', 'b' => 'Oranges', 'c'=> 'Peaches' ];
    $arrayDois  = ['c' => 'Pears', 'd' => 'Bananas' ];

    print_r($arrayUm + $arrayDois);
    print_r($arrayDois + $arrayUm);
    
    // Exception: Array to string conversion in
    //echo $arrayDois + $arrayUm; //Exception  (XDebug mostra a exception)    
?>