<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <form id="form1" name="form1" method="post" action="utilisateur_ajout_action.php">
        NOM* : 
        <input type="text" name="nom" id="nom" required><br>
        PRENOM* : 
        <input type="text" name="prenom" id="prenom" required><br>
        MAIL* : 
        <input type="email" name="mail" id="mail" required><br>
        PASSWORD : 
        <input type="password" name="mdp" id="mdp"><br>
        DATE DE NAISSANCE : 
        <input type="date" name="date-naissance" id="date-naissance"><br>
        <input type="submit" name="btn-ajouter" value="Ajouter">
    </form>


    <script src="../js/script.js"></script>
</body>
</html>