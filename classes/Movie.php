<?php
class Movie
{
    public $titolo;
    public $protagonista;
    public $genere;


    function __construct($_titolo, $_protagonista, $_genere)
    {
        $this->setTitle($_titolo);
        $this->setProtagonista($_protagonista);
        $this->genere = $_genere;
    }



    public function setTitle($newValue)
    {
        $this->titolo = $newValue;
    }
    public function setProtagonista($newValue)
    {
        $this->protagonista = $newValue;
    }
    /*public function setgenere($newValue)
    {
        $this->genere = $newValue;
    }*/
}
