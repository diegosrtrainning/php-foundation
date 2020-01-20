<?php
//https://www.php.net/manual/en/class.datetime.php

try {
    $today = new DateTime();
    $yesterday = $today->sub(new DateInterval('P1D'));
} catch (\Throwable $th) {
    //throw $th;
}    

$output = "Today: " . $today->format(DateTime::COOKIE).PHP_EOL;
$output .= "Yesterday: ".$yesterday->format(DateTime::COOKIE).PHP_EOL;

// Sinal "-" quando negativo, "+" quando positivo
// Todos os formatos em: https://www.php.net/manual/en/dateinterval.format.php
$output .= "Difference: ".$today->diff($yesterday)->format('%R%a days');
echo $output;
?>