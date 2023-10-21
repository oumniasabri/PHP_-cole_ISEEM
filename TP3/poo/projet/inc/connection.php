<?php
include("../classes/Mysql.class.php"); 

$bdd = new Mysql();
$bdd->setServeur("localhost");
$bdd->setLogin("root"); 
$bdd->setMDP("root"); 
$bdd->setDB("travail_collaboratif"); 
$bdd->connexion();