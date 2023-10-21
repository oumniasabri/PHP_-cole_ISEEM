<?php
include("../inc/connection.php");
include("../classes/utilisateur.class.php");

$utilisateurs = Utilisateur::getListe($bdd);


?>
<!DOCTYPE html>
<html>

<head>
    <title>Liste des Utilisateurs</title>
    <link rel="stylesheet" href="../css/utilisateur.css">
</head>

<body>
    <h2>Liste des Utilisateurs</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mail</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($utilisateurs as $utilisateur) : ?>
            <tr>
                <td><?= $utilisateur->getID() ?></td>
                <td><?= $utilisateur->getNom() ?></td>
                <td><?= $utilisateur->getPrenom() ?></td>
                <td><?= $utilisateur->getMail() ?></td>
                <td>
                    <a href="utilisateur_modi_action.php?id=<?= $utilisateur->getID() ?>">Modifier</a>
                    <a href="utilisateur_supp_action.php?id=<?= $utilisateur->getID() ?>">Supprimer</a>
                </td>
            </tr>


        <?php endforeach; ?>
    </table>
    <div class="center-button">
        <form action="../admin/utilisateur_ajout.php"><input type="submit" value="Ajouter un nouveau utilisateur"></form>
    </div>
</body>

</html>