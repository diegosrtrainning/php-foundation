<?php

$today = new DateTime('now');

try {
    $format = 'Y-m-d';
    $today = new DateTimeImmutable();
    $yesterday = $today->sub(new DateInterval('P1D'));  
} catch (Exception $e) {
    //throw $e;
}

$output = "Today: " . $today->format($format).PHP_EOL;
$output .= "Yesterday: ".$yesterday->format($format).PHP_EOL;

// Sinal "-" quando negativo, "+" quando positivo
// Todos os formatos em: https://www.php.net/manual/en/dateinterval.format.php
$output .= "Difference: ".$today->diff($yesterday)->format('%R%a days');
echo $output;

?>