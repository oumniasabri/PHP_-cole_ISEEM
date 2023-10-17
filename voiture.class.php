<?php

class Voiture{
    private $marque = "Dacia";
    public $color = "Blue";
    protected $model;


    public function __construct($mm,$c,$md)
    {
        $this->marque = $m;
        $this->color = $c;
        $this->model=$md;
    }

    public function stop($speed)
    {
        echo $this->marque.' speed ='.$speed;
    }
}