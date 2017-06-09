<?php 

function getAllItems() 
{
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');

$canards = $db->prepare(' SELECT canard.id, couleur.couleur as couleur, accessory.name_accessory as accessoire, material.material as matiere, taille.taille as taille  
FROM ducks.canard, ducks.taille, ducks.accessory, ducks.material, ducks.couleur 
WHERE canard.id_taille = taille.id  
AND canard.id_accessoire = accessory.id  
AND canard.id_matiere = material.id  
AND canard.id_couleur = couleur.id');
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
return $newDuck->fetchAll();
}


?>
