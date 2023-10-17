<?php

require_once "Personne.class.php";
require_once "voiture.class.php";


// $v1 = new Voiture("hi","za","ihui");

// echo $v1->color;
// echo "<br>";
// $v1->stop(20);



$p1 = new Personne("SABRI","Oumnia",24);

echo $p1->nom." ".$p1->prenom." ".$p1->getAge()." ans";

// echo "<br>";
$p1->setAge(25);
echo $p1->nom." ".$p1->prenom." ".$p1->getAge()." ans";
// $p1->afficher();

