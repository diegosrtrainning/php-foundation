<?php

$format = 'Y-m-d';
$today = date_create();
$yesterday = clone $today;
$yesterday = date_sub($yesterday.date_interval_create_from_date_string("1 days"));

try {
    $format = 'Y-m-d';
    $today = new DateTimeImmutable();
    $yesterday = $today->sub(new DateInterval('P1D'));  
} catch (Exception $e) {
    //throw $e;
}

$output = "Today: " . date_format($today,$format).PHP_EOL;
$output .= "Yesterday: ".date_format($yesterday,$format).PHP_EOL;

// Sinal "-" quando negativo, "+" quando positivo
// Todos os formatos em: https://www.php.net/manual/en/dateinterval.format.php
$output .= "Difference: ".date_diff($today, $yesterday)->format('%R%a days');
echo $output;

?>