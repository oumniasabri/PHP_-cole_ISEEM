<?php

class Personne{
    public $nom;
    public $prenom;
    private $age;

    const NATIONALITE = "MA";

    // public static $;

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
        $text .= ' Nationalité: '.self::NATIONALITE;

        return $text;
    }

    public function nbRoues()
    {
        return self::ROUES;
    }
    
}