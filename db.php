<?php
require_once __DIR__ . "./Models/Movies.php";

$genres = ["drammatico", "commedia", "animazione", "fantastico", "fantascienza", "avventura"];

$first_movie = new Movies("Forrest Gump", 1994, "en", [$genres[0], $genres[1]], "Robert Zamekis", "Tom Hanks", "forrest-gump.jpg");
$first_movie->setImgPath();
$first_movie->getImgPath();

$second_movie = new Movies("Spider-Man Into The Spider-Verse", 2018, "en", [$genres[2], $genres[3], $genres[4], $genres[1], $genres[5]], ["Bob Persicatti", "Peter Ramsey", "Rodney Rothman"], "Shameik Moore", "spider-man.jpg");
$second_movie->setImgPath();
$second_movie->getImgPath();

var_dump($first_movie);
echo "-----------";
var_dump($second_movie);

?>