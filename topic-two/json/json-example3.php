<?php

$media = new stdClass();
$media->movies = [
'A History of Violence' => [
'year' => 2005,
'country' => 'USA',
'genre' => 'Crime',
'director' => [
'last_name' => 'Cronenberg',
'first_name' => 'David',
'birth_date' => 1943
],
],
'Heat' => [
'year' => 1995,
'country' => 'USA',
'genre' => 'Crime',
'director' => [
'last_name' => 'Mann',
'first_name' => 'Michael',
'birth_date' => 1943
],
],
];
$result = json_decode(json_encode($media));
echo json_last_error() . PHP_EOL, json_last_error_msg();
/* Yields: "0
No error"*/
?>