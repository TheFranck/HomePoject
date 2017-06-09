<?php 

function getAllItems() 
{
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');

$canards = $db->prepare('SELECT 
    canard.id,
    id_couleur AS couleur,
   id_accessoire AS accessoire,
    id_matiere AS matiere,
    id_taille AS taille
FROM
    ducks.canard,
    tailles,
    accessory,
    material,
    colors
WHERE
    canard.id_couleur = colors.id
AND canard.id_accessoire = accessory.id
AND canard.id_matiere = material.id
AND canard.id_couleur = colors.id;');

$canards->execute();
return $canards->fetchAll();

}

function getAllTaille()
{
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');
$tailles = $db->prepare('SELECT * FROM tailles'); 
$tailles->execute();
return $tailles->fetchAll();
}

function getAllAccessory()
{
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');
$accessories = $db->prepare('SELECT * FROM accessory'); 
$accessories->execute();
return $accessories->fetchAll();
}

function getAllCouleur()
{
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');
$colors = $db->prepare('SELECT * FROM colors'); 
$colors->execute();
return $colors->fetchAll();
}

function getAllMaterial()
{
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');
$materials = $db->prepare('SELECT * FROM material'); 
$materials->execute();
return $materials->fetchAll();
}

function insertDuck()
{
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');
$newDuck = $db->prepare('INSERT INTO canard (taille, couleur, matiere, accessoire) VALUES (:taille, :couleur, :matiere, :accessoire)'); 
$newDuck->bindParam(':taille',$_POST['taille']);
$newDuck->bindParam(':couleur',$_POST['couleur']);
$newDuck->bindParam(':matiere',$_POST['material']);
$newDuck->bindParam(':accessoire',$_POST['name_accessory']);
$newDuck->execute();
}
?>
