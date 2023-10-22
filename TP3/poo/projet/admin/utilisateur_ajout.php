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
    <table>
    <tr>
        <td>NOM* : </td>
        <td><input type="text" name="nom" id="nom" required><br></td>
    </tr>
    <tr>
        <td>PRENOM* : </td>
        <td><input type="text" name="prenom" id="prenom" required><br></td>
    </tr>
    <tr>
        <td>MAIL* : </td>
        <td><input type="email" name="mail" id="mail" required><br></td>
    </tr>
    <tr>
        <td>PASSWORD : </td>
        <td><input type="password" name="mdp" id="mdp"><br></td>
    </tr>    
    <tr>
        <td>DATE DE NAISSANCE :</td> 
        <td><input type="date" name="date-naissance" id="date-naissance"><br></td>
    </tr>
    <tr>
        <td><input type="submit" name="btn-ajouter" value="Ajouter"></td>
    </tr>
</table>
    </form>


    <script src="../js/script.js"></script>
</body>
</html>