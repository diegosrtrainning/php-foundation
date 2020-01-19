<?php
    $varOne = 1;

    echo "Modelos condicionais: \n\n";
    // if/else inline
    if($varOne === 1)
        echo "M1 - Igual a um\n";
    else 
        echo "M1 - Diferente de um\n";
        echo "M1 - final\n"; // OLHA ISSO
    
    // if/else in block
    if($varOne === 1){
        echo "M2 - Igual a um \n";
    } else {
        echo "M2 - Diferente de um \n";
        echo "M2 - final"; // OLHA ISSO
    }

    if($varOne === 2){
        echo "M3 - Igual a dois \n";
    } else if ($varOne ===  1){
        echo "M3 - Igual a um \n";        
    }

    $varOne = 4;
    if($varOne === 2){
        echo "M4 - Igual 2 \n";
    } else if ($varOne ===  1){
        echo "M4 - Igual a um \n";        
    } else{
        echo "M4 - Diferente de um e dois\n";
    }

    // Operador ternário
    echo "Modelo condicional ternário:\n\n";
    $greeting = "Bem vindo ";
    $admin = false;        
    echo $greeting, $admin ? "Administrador" : "User", ".\n"; 

    // Atalho para operador ternário    
    $nomeFulano = "Thiago";
    // $nomeFulano = null;
    echo "Bem vindo ", $nomeFulano ?: "Convidado.", "\n";

    //Notice: Undefined variable nomeUsuarioA: 
    echo "Bem vindo ", $nomeUsuarioA ?: "Convidado.\n";
?>