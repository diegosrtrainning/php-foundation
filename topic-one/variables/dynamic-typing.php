<?php
    $value = 10;

    if(isset($value)){
        echo "Variavel iniciada";
    }

    $value = null;
    if(!isset($value)){
        echo "Variavel nao iniciada";
    }

    if(!isset($valueAAAA)){
        echo "Variavel valueAAAA nao iniciada";
    }
?>