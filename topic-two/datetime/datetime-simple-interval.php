<?php

$today = new DateTime('now');

try {
    $format = 'Y-m-d';
    $today = new DateTimeImmutable();
    $yesterday = $today->sub(new DateInterval('P1D'));

    // var_dump($yesterday);
    // echo "\n\n" . $yesterday->date;
} catch (Exception $e) {
    //throw $e;
}

echo "Today: " . $today->format($format).PHP_EOL."Yesterday: ".$yesterday->format($format);

?>