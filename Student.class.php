<?php

class Student extends Personne{

    private $note;

    public function __construct($nom, $prenom, $age, $note)
    {
        parent::__construct($nom, $prenom, $age);
        $this->note = $note;
    }

    public function __toString()
    {
        $text = parent::__toString().'<br>Note:'.$this->note;
        return $text;
    }

}