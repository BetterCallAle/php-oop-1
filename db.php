<?php
require_once __DIR__ . "./Models/Movies.php";

$first_movie = new Movies("Forrest Gump", 1994, "en", ["drammatico", "commedia"], "Robert Zamekis", "Tom Hanks", "forrest-gump.jpg");
$first_movie->setImgPath();
$first_movie->getImgPath();

$second_movie = new Movies("Spider-Man Into The Spider-Verse", 2018, "en", ["animazione", "fantastico", "fantascienza", "commedia", "avventura"], ["Bob Persicatti", "Peter Ramsey", "Rodney Rothman"], "Shameik Moore", "spider-man.jpg");
$second_movie->setImgPath();
$second_movie->getImgPath();

var_dump($first_movie);
echo "-----------";
var_dump($second_movie);

?>