<?php
class Movie
{
    public $titolo;
    public $protagonista;
    public $genere;
}

$film_1 = new Movie();
$film_1->titolo = "Iron Man 3";
$film_1->protagonista = "Robert Downey Jr";
$film_1->genere = "Azione";

$film_2 = new Movie();
$film_2->titolo = "Doctor Strange";
$film_2->protagonista = "Benedict Cumberbatch";
$film_2->genere = "Azione";
