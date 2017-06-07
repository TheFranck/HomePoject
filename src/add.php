<?php     
require_once("template/head.php");
require_once("function/baseFunction.php");
    $tailles = getAllTaille();
    $colors = getAllCouleur();
    $materials = getAllMaterial();
    $accessories = getAllAccessory();
   
?>

<div id="formulaire">

<form action="function/insert.php" method="post">
    <label for="taille">Choississez la taille de votre canard : </label>
     <select name="taille" required="true">
           <?php 
                foreach ($tailles as $value) {
                    echo " <option value='". $value['id'] . "'>". $value['taille'] . "</option> "; // ici on creer une liste déroulante pour selectionner la taille
                }
            ?>
    </select> 

    <label for="couleur">Choississez la couleur de votre canard : </label>
    <select name="couleur" required="true">
           <?php 
                foreach ($colors as $value) {
                    echo " <option value='". $value['id'] . "'>". $value['couleur'] . "</option> "; // ici on creer une liste déroulante pour selectionner les couleurs
                }
            ?>
    </select> 

    <label for="material">Choississez la matière de votre canard : </label>
    <!--<input type="text" name="editeur" id="editor">-->

    <select name="material" required="true">
           <?php 
                foreach ($materials as $value) {
                    echo " <option value='". $value['id'] . "'>". $value['material'] . "</option> "; // ici on creer une liste déroulante pour selectionner la matiere
                }
            ?>
    </select> 
    <label for="">Choississez Votre ou vos accessoires :</label>
    <select name="accessory[]" multiple>
        <?php 
            foreach ($accessories as $value) {
                echo " <option value='". $value['id'] . "'>". $value['accessory'] . "</option> "; // ici on creer une liste déroulante pour selectionner le ou les accessoires
            }
            ?>
    </select>
    
    <input class="btn" type="submit" value="Ajouter">

    </div>

    </body>
      
    </html>