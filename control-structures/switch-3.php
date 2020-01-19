<?php
    // Operador Switch
    echo "Modelo condicional SWITCH:\n\n";
    
    $color = 'blue';
    $phrase = 'Color is ';

    switch($color){
        case 'red':
            echo $phrase . $color;
            break;
        
        case 'green':
            echo $phrase . $color;
            break;
        case 'blue':
            echo $phrase . $color;
            break;
        default:
            echo "Please enter red, green or blue";
    }

    echo "\n\nFalta do break:\n";
    
    switch($color){
        case 'blue':
            echo $phrase . $color;                   
        case 'red':
            echo $phrase . $color;
            break;
        case 'green':
            echo $phrase . $color;
            break;
        default:
            echo "Please enter red, green or blue";
    }


?>    