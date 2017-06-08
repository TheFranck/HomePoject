<?php     
require_once("template/head.php");
require_once("function/baseFunction.php");
    $tailles = getAllTaille();
    $colors = getAllCouleur();
    $materials = getAllMaterial();
    $accessories = getAllAccessory();
   
?>

<section id="add">
			<div class="row container-add">
				<h2>Choississez vos différentes options</h2>

                    <form action="function/insert.php" method="post">
                        <label for="taille">Choississez la taille de votre canard : </label>
                        <select name="taille" required="true">
                            <?php 
                                    foreach ($tailles as $value) {
                                        echo " <option value='". $value['id'] . "'>". $value['taille'] . "</option> ";
                                    }
                                ?>
                        </select> 

                        <label for="couleur">Choississez la couleur de votre canard : </label>
                        <select name="couleur" required="true">
                            <?php 
                                    foreach ($colors as $value) {
                                        echo " <option value='". $value['id'] . "'>". $value['couleur'] . "</option> "; 
                                    }
                                ?>
                        </select> 

                        <label for="material">Choississez la matière de votre canard : </label>
                        <select name="material" required="true">
                            <?php 
                                    foreach ($materials as $value) {
                                        echo " <option value='". $value['id'] . "'>". $value['material'] . "</option> "; 
                                    }
                                ?>
                        </select> 

                        <label for="accessory">Choississez votre accessoire :</label>
                        <select name="accessory" required="true">
                            <?php 
                                foreach ($accessories as $value) {
                                    echo " <option value='". $value['id'] . "'>". $value['name_accessory'] . "</option> ";
                                } 
                                ?>
                        </select>
                        
                        <input class="btn" type="submit" value="Ajouter">
                    </form>
        </div>	
</section>

<?php require_once("template/footer.php"); ?>