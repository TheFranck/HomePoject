<?php require_once("template/head.php"); ?>

<!-- A STYLER -->
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>Le Coin du Canards</title>
    </head>
<body>
    <h2>Connexion à votre compte</h2>
        <form method="post" action="function/login.php">
            <label for="user">Votre identifiant :</label>
            <input type="text" name="username" id="user" value="" required="true">

            <label for="mpd">Votre mot de passe : </label>
            <input type="password" name="password" value="" id="mpd" required="true">

            <input type="submit" name="" value="Se connecter">
        </form>


        <h2>Créer un nouveau compte</h2>
        <form method="post" action ="function/register.php">
            <label for="newUser">Votre identifiant :</label>
            <input id="newUser" type="text" name="newUsername" value="">

            <label for="newMpd">Votre mot de passe : </label>
            <input type="password" name="NewPassword" value="" id="newMpd" required="true">

            <input type="submit" name="" value="Créer un nouveau compte">
        </form>
</body>
</html>