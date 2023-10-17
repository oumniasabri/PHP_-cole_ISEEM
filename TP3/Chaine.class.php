<?php

class Chaine{
    private $texte;

    public function __construct($texte)
    {
        $this->texte = $texte;
    }

    public function gras(){
        return "<b>".$this->texte."</b>"; 
    }

    public function italique(){
        return "<i>".$this->texte."</i>";
    }

    public function souligne(){
        return "<u>".$this->texte."</u>";
    }

    public function majuscule($texte){
        return strtoupper($this->texte);
    }
}