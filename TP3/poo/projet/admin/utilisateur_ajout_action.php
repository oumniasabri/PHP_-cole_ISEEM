<?php
include("..\inc\connection.php");
include("..\classes\utilisateur.class.php");


$user = new Utilisateur();
$user->setNom($_REQUEST['nom']);
$user->setPrenom($_REQUEST['prenom']);
$user->setMail($_REQUEST['mail']);
$user->setMDP($_REQUEST['mdp']);
$user->setDNaissance($_REQUEST['date-naissance']);

if ($user->enregistrer($bdd))
    header("location:..\admin\utilisateurs_liste.php");