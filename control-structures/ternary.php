<?php
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