<?php
    // JavaScript Object Notation (JSON)
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

// Exibir código fonte
echo json_encode($media, JSON_PRETTY_PRINT);
?>