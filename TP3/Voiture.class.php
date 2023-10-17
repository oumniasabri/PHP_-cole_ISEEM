<?php

class Voiture{

    private $matricule;
    private $marque;
    private $modele;
    private $annee;

    public function __construct($matricule, $marque, $modele, $annee)
    {
        $this->matricule = $matricule;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }


    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }
    public function getMatricule()
    {
        return $this->matricule;
    }


    public function setMarque($marque)
    {
        $this->marque = $marque;
    }
    public function getMarque()
    {
        return $this->marque;
    }


    public function setModele($modele)
    {
        $this->modele = $modele;
    }
    public function getModele()
    {
        return $this->modele;
    }

    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }
    public function getAnnee()
    {
        return $this->annee;
    }

    public function Afficher()
    {
        echo "La matricule: ".$this->matricule;
        echo "La marque: ".$this->marque;
        echo "La modele: ".$this->modele;
        echo "La annee: ".$this->annee;

    }


}