<?php

class Personne{
    public $nom;
    public $prenom;
    private $age;

    public function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function afficher()
    {
        echo $this->nom." Age = ".$age;
    }

    public function __toString()
    {
        $text = 'Nom: '.$this->nom;
        $text .= ' Prenom: '.$this->prenom;
        $text .= ' Age: '.$this->age;

        return $text;
    }
    
}