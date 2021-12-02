<?php
require_once "classes/Movie.php";
require_once "arrMovie.php";


$film_1 = new Movie("Iron Man 3", "Robert Downey Jr", "Azione");
//$film_1->setTitle("Iron Man 3");
//$film_1->setProtagonista("Robert Downey Jr");
//$film_1->setGenere("Azione");

var_dump($film_1);

$film_2 = new Movie("Doctor Strange", "Benedict Cumberbatch", "Azione");
//$film_2->setTitle("Doctor Strange");
//$film_2->setProtagonista("Benedict Cumberbatch");
//$film_2->setGenere("Azione");

var_dump($film_2);


foreach ($movieList as $movieSingle) {
    echo "<ul>";
    echo "<li>" . "<strong>" .  "Titolo: " . "</strong>" . $movieSingle['titolo'] . "</li>";
    echo "<li>" . "<strong>" . "Protagonista: " . "</strong>" . $movieSingle['protagonista'] . "</li>";
    echo "<li>" . "<strong>" . "Genere: " . "</strong>" . $movieSingle['genere'] . "</li>";
    echo "</ul>";
}

echo "<hr>";
/* foreach ($movieList as $movieSingle) {
    $film = new Movie($movieSingle['titolo'], $movieSingle['protagonista'], $movieSingle['genere']);


    echo "<ul>";
    echo "<li>" . "<strong>" .  "Titolo: " . "</strong>" . $film->titolo . "</li>";
    echo "<li>" . "<strong>" . "Protagonista: " . "</strong>" .  $film->protagonista . "</li>";
    echo "<li>" . "<strong>" . "Genere: " . "</strong>" .  $film->genere . "</li>";
    echo "</ul>";
} */
