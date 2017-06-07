<?php     
require_once("template/head.php");
require_once("function/baseFunction.php");
$canards = getAllItems();
?>
<div id="tableau">

<table>
  <tr>  
    <th>Taille de votre canard</th>
    <th>Couleur de votre canard</th>   
    <th>Matière de votre canard</th>
    <th>Vos accessoires</th>
  </tr>    
    <?php 
        foreach ($canards as $key => $value) {
            echo "<tr>";
            echo "<td>" . $value['id_taille'] . "</td>" ;
            echo "<td> " . $value['id_couleur'] . "</td> "  ;
            echo "<td> " . $value['id_material'] . "</td> "  ;
            echo "<td> " . $value['id_accessory'] . "</td> "  ;
            echo "</tr>";
            };
    ?>
</table>
</div>