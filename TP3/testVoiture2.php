<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Voiture</title>
</head>
<body>

<?php

require_once "Voiture.class.php";
require_once "voitureElectrique.class.php";


if (isset($_POST['matricule'],$_POST['marque'],$_POST['modele'],$_POST['annee'])) {
    if (isset($_POST['autonomie']))
    {
        $matricule = $_POST["matricule"];
        $marque = $_POST["marque"];
        $modele = $_POST["modele"];
        $annee = $_POST["annee"];
        $autonomie = $_POST["autonomie"];

        $voitureElec = new voitureElectrique($matricule,$marque,$modele,$annee,$autonomie);
        echo "<h2>Voiture Elect</h2>";
        $voitureElec->Afficher();
        // echo $voitureElec;  
    }
else
    {
        $matricule = $_POST["matricule"];
        $marque = $_POST["marque"];
        $modele = $_POST["modele"];
        $annee = $_POST["annee"];

        $voiture = new Voiture($matricule,$marque,$modele,$annee);
        echo "<h2>Voiture</h2>";
        $voiture->Afficher();
        // echo $voiture;
    }
}

else{
echo '<form action="testVoiture2.php" method="post"><table border="1">';
echo '<tr><td colspan="2">Veuillez remplir les informations suivantes:</td></tr>';
echo '<tr><td>Matricule</td><td><input type="text" name="matricule"></td></tr>';
echo '<tr><td>Marque</td><td><input type="text" name="marque"></td></tr>';
echo '<tr><td>Modèle</td><td><input type="text" name="modele"></td></tr>';
echo '<tr><td>Autonomie</td><td><input type="text" name="autonomie"></td></tr>';
// echo '<tr><td>Type</td><td><input type="radio" name="voiture" value="Voiture"><input type="radio" name="voitureElec" value="Voiture Electrique)"></td></tr>';
echo '<tr><td>Année</td><td><select name="annee" id="annee"><option value="2010">2010</option>';
echo '<option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option>';
echo '<option value="2014">2014</option></select></td></tr>';
echo '<tr><td><input type="submit" value="Valider" name="send"></td><td></td></tr>';
echo '</table></form></body></html>';
}
?>
