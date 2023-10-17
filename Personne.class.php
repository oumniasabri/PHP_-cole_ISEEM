<?php

class Personne{
    private $nom = "Ahmed";
    public $prenom;
    public $age = 20;

    public function afficher()
    {
        echo $this->nom." Age = ".$age;
    }
    
}