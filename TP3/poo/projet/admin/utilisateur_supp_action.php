<?php
include("../inc/connection.php");
include("../classes/utilisateur.class.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $u = Utilisateur::getOne($bdd, $id);
    if ($u) {
        if ($u->supprimer($bdd)) {
            header('location:..\admin\utilisateurs_liste.php');
        } else {
            echo "Erreur lors de la suppression de l'utilisateur.";
        }
    } else {
        echo "Utilisateur introuvable.";
    }
} else {
    echo "ID de l'utilisateur non spécifié.";
}