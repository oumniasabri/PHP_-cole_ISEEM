<?php

class Voiture{
    private $marque = "Dacia";
    public $color = "Blue";
    protected $model;

    public function stop($speed)
    {
        echo $this->marque.' speed ='.$vitesse;
    }
}