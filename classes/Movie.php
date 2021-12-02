<?php
class Movie
{
    public $titolo;
    public $protagonista;
    public $genere;


    public function setTitle($newValue)
    {
        $this->titolo = $newValue;
    }
    public function seProtagonista($newValue)
    {
        $this->protagonista = $newValue;
    }
    public function setgenere($newValue)
    {
        $this->genere = $newValue;
    }
}
