<?php
    // Operador Switch
    echo "Modelo condicional SWITCH:\n\n";
    
    $color = 'olive';
    $phrase = 'Color is ';

    switch(true){
        case($color === 'red'):
            echo $phrase . $color;
            break;
        case($color === 'jade'):
        case($color === 'mint'):
        case($color === 'olive'):
        case($color === 'green'):
            echo $phrase . 'greenish.';
            break;
        case($color === 'blue'):
            echo $phrase . $color;
            break;
        default:
            echo "Please enter red, green or blue.";
    }
?>    