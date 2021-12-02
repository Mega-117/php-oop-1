<?php
require_once "classes/Movie.php";


$film_1 = new Movie();
$film_1->setTitle("Iron Man 3");
$film_1->seProtagonista("Robert Downey Jr");
$film_1->setGenere("Azione");

var_dump($film_1);

$film_2 = new Movie();
$film_2->setTitle("Doctor Strange");
$film_2->seProtagonista("Benedict Cumberbatch");
$film_2->setGenere("Azione");

var_dump($film_2);
