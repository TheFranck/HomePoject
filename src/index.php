<?php
session_start();
if($_SESSION['isConnected']==True) {
    //Do nothing
} else {
    header('Location: loginRegister.php');
}

require_once("template/head.php");
require_once("function/baseFunction.php");

 ?>
<section id="accueil">
			<div class="row container-presentation">
				<div class="presentation-text">
			<h2>Bienvenue</h2>
			<h3>Êtes vous prêt à avoir votre propre petit canard ?</h3>

            <p>Je vous présente tout d'abord le concept avant de vous lancer dans la customisation de votre canard, le meilleur compagnon des bains solitaires.</p>
            <h4>Le canard Coin coin.</h4>
            <p>Depuis maintenant plusieurs années, un nouvel ami a su se faire sa petite place de le monde des bains : le petit canard en plastique.</p>
            <p>Joueur ou encore confident intime de vos bains, le canard est toujours là, dans votre baignoire, attendant que vous la remplissiez et vous voir émerveiller de sa capacité à flotter.</p>
            <h4>Customizer mon canard</h4>
            <p>Nous vous proposons un large choix de customisation pour votre canard afin qu'il soit unique </p>
			 <div class="btn">
                <a href="add.php">C'est parti pour la Coin-stumization</a> 
            </div>
            </div>
			    <img src="img/duck.jpg" alt="petit canard en pastique">
			</div>	
	</section>


 <?php require_once("template/footer.php"); ?>
