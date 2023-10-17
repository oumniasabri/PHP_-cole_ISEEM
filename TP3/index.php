<?php
require_once "Chaine.class.php";

echo "<h2>TP3</h2>";

$message = new Chaine("Codeur Web ISEEM");
// $message = new Chaine();
echo $message->gras("Codeur Web ISEEM");
echo "<br>";
echo $message->italique("Codeur Web ISEEM");
echo "<br>";
echo $message->souligne("Codeur Web ISEEM");
echo "<br>";
echo $message->majuscule("Codeur Web");


