<?php
require_once "Chaine.class.php";
require_once "Voiture.class.php";


echo "<h2>Partie 1</h2>";

$message = new Chaine("Codeur Web ISEEM");
// $message = new Chaine();
echo $message->gras("Codeur Web ISEEM");
echo "<br>";
echo $message->italique("Codeur Web ISEEM");
echo "<br>";
echo $message->souligne("Codeur Web ISEEM");
echo "<br>";
echo $message->majuscule("Codeur Web");

echo "<h2>Partie 2</h2>";

$car1 = new Voiture("");

