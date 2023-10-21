<?php
include("../inc/connection.php");
include("../classes/utilisateur.class.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $u = Utilisateur::getOne($bdd, $id);
    if ($u) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $u->setNom($_POST['nom']);
            $u->setPrenom($_POST['prenom']);
            $u->setMail($_POST['mail']);
            $u->setMDP($_POST['mdp']);
            $u->setDNaissance($_POST['date-naissance']);

            if ($u->modifier($bdd)) {
                echo "Modification de l'utilisateur OK.";
            } else {
                echo "Erreur lors de la modification de l'utilisateur.";
            }
        } else {

      ?>
            <!DOCTYPE html>
            <html>

            <head>
                <title>Modifier un Utilisateur</title>
            </head>

            <body>
                <h2>Modifier un Utilisateur</h2>
                <form id="form_modification" name="form_modification" method="post" action="utilisateur_modi_action.php?id=<?= $id ?>">
                    <input type="text" name="nom" id="nom" value="<?= $u->getNom() ?>">
                    <input type="text" name="prenom" id="prenom" value="<?= $u->getPrenom() ?>">
                    <input type="text" name="mail" id="mail" value="<?= $u->getMail() ?>">
                    <input type="text" name="mdp" id="mdp" value="<?= $u->getMDP() ?>">
                    <input type="text" name="date-naissance" id="date-naissance" value="<?= $u->getDNaissance() ?>">
                    <div class="center-button">
                        <input type="submit" name="modifier" value="Modifier">
                    </div>
                </form>
                <div class="center-button">
                    <form action="../admin/utilisateur_ajout.php"><input type="submit" value="Ajouter un nouveau utilisateur"></form>
                </div>
                <div class="center-button">
         <form action="../admin/utilisateurs_liste.php"><input type="submit" value="Retour à la liste des utilisateur"></form>
         </div>
            </body>

            </html>
<?php
        }
    } else {
        echo "Utilisateur introuvable.";
    }
} else {
    echo "ID de l'utilisateur non spécifié.";
}
?>