<?php

class Voiture{
    private $marque = "Dacia";
    public $color = "Blue";
    protected $model;


    public function __construct($m,$c,$md)
    {
        $this->marque = $m;
        $this->color = $c;
        $this->model = $md;
    }

    public function __destruct()
    {
        echo "Cette voiture est supprimée";
    }

    public function stop($speed)
    {
        echo $this->marque.' speed ='.$speed;
    }
}