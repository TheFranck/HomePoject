<?php     
require_once("template/head.php");
require_once("function/baseFunction.php");
$newDuck = getAllItems();

?>

<div class="liste">
  <h2>Récapitulatif</h2>
  <div id="tableau">
      <table>
        <tr>  
          <th>Taille de votre canard</th>
          <th>Couleur de votre canard</th>   
          <th>Matière de votre canard</th>
          <th>Vos accessoires</th>
        </tr>    
          <?php 

              foreach ($newDuck as $key => $value) {
                  
                  echo "<tr>";
                  echo "<td>" . $value['taille'] . "</td>" ;
                  echo "<td> " . $value['couleur'] . "</td> "  ;
                  echo "<td> " . $value['material'] . "</td> "  ;
                  echo "<td> " . $value['name_accessory'] . "</td> "  ;
                  echo "</tr>";
                  
                  };
          ?>
      </table>
  </div>

</div>

<?php require_once("template/footer.php"); ?>

            var_dump($_POST);die;