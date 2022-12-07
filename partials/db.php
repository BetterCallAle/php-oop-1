<?php
require_once __DIR__ . "./../Models/Movies.php";
require_once __DIR__ . "./../Models/Actors.php";

//create a genre array
$genres = ["drammatico", "commedia", "animazione", "fantastico", "fantascienza", "avventura", "noir", "thriller"];

//create an array with Actors instances
$actors = [
    new Actors("Tom Hanks", "1956/07/09", "Concors", "Tom Hanks Biography"),
    new Actors("Robin Gayle Wright", "1966/04/08", "Dallas"),
    new Actors("Shameik Moore", "1995/05/04", "Atlanta"),
    new Actors("Mark Jake Johnson Weinberger", "1978/05/28", "Evanston"),
    new Actors("Naomi Ellen Watts", "1968/09/28", "Shoreham"),
    new Actors("Laura Harring", "1964/03/03", "Los Mochis", "Laura Harring Biography")
];

//Create an array with Movies instances
$movies = [
    new Movies("Forrest Gump", 1994, "en", [$genres[0], $genres[1]], "Robert Zamekis", [$actors[0], $actors[1]], "forrest-gump.jpg"),
    new Movies("Spider-Man Into The Spider-Verse", 2018, "en", [$genres[2], $genres[3], $genres[4], $genres[1], $genres[5]], ["Bob Persicatti", "Peter Ramsey", "Rodney Rothman"], [$actors[2], $actors[3]], "spider-man.jpg"),
    new Movies("Mulholland Drive", 2001, "en", [$genres[0], $genres[6], $genres[7]], "David Lynch", [$actors[4], $actors[5]])
];
?>