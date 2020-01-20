<?php

$xml = simplexml_load_file('movie.xml');

foreach ($xml->movie as $movie) {
    echo $movie->title .PHP_EOL ;
}

$actors = $xml->xpath("movie/actor");

foreach ($actors as $actor) {
    echo $actor->first_name . " " . $actor->last_name . "\n";
}

?>