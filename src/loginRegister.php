<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="/img/canard-pirate.ico" />
        <title>Le Coin du Canards</title>
    </head>
<body>
<header>
    <div class="menu"> 
        <h1>
            <a href="index.php">Le Coin du Canards</a>
        </h1>
    </div>
</header>

<section id="login">
			<div class="row container-login">
				 <h2>Connexion à votre compte</h2>
                    <form method="post" action="function/login.php" class="log">
                        <label for="user">Votre identifiant :</label>
                        <input type="text" name="username" id="user" value="" required="true">

                        <label for="mpd">Votre mot de passe : </label>
                        <input type="password" name="password" value="" id="mpd" required="true">

                        <input class="btn-register" type="submit" name="" value="Se connecter">
                    </form>
                <h2>Créer un nouveau compte</h2>
                    <form method="post" action ="function/register.php" class="regist">
                        <label for="newUser">Tapez votre nouvel identifiant :</label>
                        <input id="newUser" type="text" name="newUsername" value="">

                        <label for="newMpd">Tapez votre nouveau mot de passe : </label>
                        <input type="password" name="NewPassword" value="" id="newMpd" required="true">

                        <input class="btn-register" type="submit" name="" value="Créer un nouveau compte">
                    </form>
            </div>
	</section>

<?php require_once("template/footer.php"); ?>