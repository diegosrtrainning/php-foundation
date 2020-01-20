<?php
    define('PATH', 'usr/local/bin/php');
    echo PATH;
    
    /*Warning: Use of undefined constant PATH2 
    - assumed 'PATH2' (this will throw an Error 
    in a future version of PHP)*/
    echo PATH2;

    /*Regras (Naming Rules)
    1- Deve começar com letras ou underscore
    2- Pode conter letras, underscores e números
    3- Pode ser definida como case sensite ou não*/
    define('CONSTANT_1', 'AAAAAA');
    echo CONSTANT_1;
    echo Constant_1; // Warning: Use of undefined constant Constant_1

    //UnCaseSentitive
    define('CONSTANT_2', 'BBBBB', true);    
    echo Constant_2; // OK
?>