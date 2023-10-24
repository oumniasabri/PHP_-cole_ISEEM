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
            echo "Error deleting user.";
        }
    } else {
        echo "User not found.";
    }
} else {
    echo "User ID not specified.";
}