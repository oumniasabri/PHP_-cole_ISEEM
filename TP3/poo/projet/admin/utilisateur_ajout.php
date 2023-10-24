<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Ajouter un utilisateur</title>
</head>

<body>

<h2>Enter the information to add a user:</h2>

<form id="form1" name="form1" method="post" action="utilisateur_ajout_action.php">
    <table>
        <tr>
            <td>NAME : </td>
            <td><input type="text" name="nom" id="nom" required><br></td>
        </tr>
        <tr>
            <td>SURNAME : </td>
            <td><input type="text" name="prenom" id="prenom" required><br></td>
        </tr>
        <tr>
            <td>MAIL : </td>
            <td><input type="email" name="mail" id="mail" required><br></td>
        </tr>
        <tr>
            <td>PASSWORD : </td>
            <td><input type="password" name="mdp" id="mdp"><br></td>
        </tr>    
        <tr>
            <td>BIRTH DATE :</td> 
            <td><input type="date" name="date-naissance" id="date-naissance"><br></td>
        </tr>
    </table>
    <input type="submit" name="btn-ajouter" value="ADD">
</form>


    <script src="../js/script.js"></script>
</body>
</html>