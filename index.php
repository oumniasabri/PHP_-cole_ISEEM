<?php

require_once "Personne.class.php";
require_once "voiture.class.php";


$v1 = new Voiture();

echo $v1->color;

$v1->stop(20);



$p1 = new Personne();
// $p1->afficher();

