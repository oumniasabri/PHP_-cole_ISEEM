<?php

require_once "Personne.class.php";
require_once "voiture.class.php";


// $v1 = new Voiture("hi","za","ihui");

// echo $v1->color;
// echo "<br>";
// $v1->stop(20);



$p1 = new Personne("SABRI","Oumnia",24);

echo $p1->nom." ".$p1->prenom." ".$p1->getAge()." ans";
echo "<br>";
echo $p1;

echo "<br>";
$p1->setAge(25);
echo $p1->nom." ".$p1->prenom." ".$p1->getAge()." ans";
// $p1->afficher();



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

