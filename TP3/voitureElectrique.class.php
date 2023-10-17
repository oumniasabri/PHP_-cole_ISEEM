<?php
require_once "Voiture.class.php";

class voitureElectrique extends Voiture{

    private $autonomie;


    public function __construct($matricule, $marque, $modele, $annee, $autonomie)
    {
        parent::__construct($matricule, $marque, $modele, $annee);
        $this->autonomie = $autonomie;
    }

    public function setAutonomie($autonomie)
    {
        $this->autonomie = $autonomie;
    }
    public function getAutonomie()
    {
        return $this->autonomie;
    }


    public function AfficherAutonomie()
    {
        echo $this->getAutonomie();
    }

    public function Afficher()
    {
        parent::Afficher();
        echo "Autonomie: ".$this->getAutonomie();
    }
}