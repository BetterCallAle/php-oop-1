<?php
require_once __DIR__ . "./Models/Movies.php";

$first_movie = new Movies("Forrest Gump", 1994, "en", "drammatico", "Robert Zamekis", "Tom Hanks");

var_dump($first_movie);

?>