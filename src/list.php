<?php     
require_once("template/head.php");
require_once("function/baseFunction.php");
$newDuck = getAllItems();
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
        foreach ($newDuck as $key => $value) {
            
            echo "<tr>";
            echo "<td>" . $value['taille'] . "</td>" ;
            echo "<td> " . $value['couleur'] . "</td> "  ;
            echo "<td> " . $value['matiere'] . "</td> "  ;
            echo "<td> " . $value['accessoire'] . "</td> "  ;
            echo "</tr>";
            
            };
    ?>
</table>
</div>
<?php require_once("template/footer.php"); ?>