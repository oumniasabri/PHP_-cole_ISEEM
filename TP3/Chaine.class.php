<?php

class Chaine{
    private $texte;

    public function __construct($texte)
    {
        $this->texte = $texte;
    }

    public function gras(){
        return "<b>Gras: ".$this->texte."</b>"; 
    }

    public function italique(){
        return "<i>Italique: ".$this->texte."</i>";
    }

    public function souligne(){
        return "<u>Souligne: ".$this->texte."</u>";
    }

    public function majuscule($texte){
        return "Majuscule: ".strtoupper($this->texte);
    }
}