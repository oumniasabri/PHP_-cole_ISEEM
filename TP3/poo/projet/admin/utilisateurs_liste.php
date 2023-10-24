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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <h2>List of Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
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
                    <a href="utilisateur_modi_action.php?id=<?= $utilisateur->getID() ?>">Modify</a>
                    <a href="utilisateur_supp_action.php?id=<?= $utilisateur->getID() ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="center-button">
        <form action="../admin/utilisateur_ajout.php"><input type="submit" value="Add a new user"></form>
    
    </div>
</body>

</html>