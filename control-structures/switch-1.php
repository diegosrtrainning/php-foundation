<?php
    // Operador Switch
    echo "Modelo condicional SWITCH:\n\n";
    
    $color = 'blue';
    $phrase = 'Color is ';

    switch(true){
        case($color === 'red'):
            echo $phrase . $color;
            break;
        
        case($color === 'green'):
            echo $phrase . $color;
            break;
        case($color === 'blue'):
            echo $phrase . $color;
            break;
        default:
            echo "Please enter red, green or blue";
    }
?>    