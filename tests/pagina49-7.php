<?php
    define('CONSTANT', 1);
    define('_CONSTANT', 0);
    define('EMPTY', '');

    if(!empty(EMPTY)){ //Não é possível fazer empty de CONSTANT
        if(!((boolean)_CONSTANT)){
            print "One";
        }
    } else if(constant('CONSTANT') == 1){
        print 'Two';
    }
    
    
?>