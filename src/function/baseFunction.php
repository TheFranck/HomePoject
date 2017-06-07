<?php 

function getAllItems() 
{
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');

$canards = $db->prepare('SELECT canard.id, id_couleur as couleur, id_accessory as accessoire, id_material as matiere, id_taille as taille 
                        FROM ducks.canard, ducks.taille, ducks.accessory, ducks.material, ducks.couleur
                        WHERE canard.id_taille = taille.id AND canard.id_accessory = accessory.id AND canard.id_material = material.id AND canard.id_couleur = couleur.id;');
$canards->execute();

return $canards->fetchAll();

}

function getAllTaille()
{
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');
$tailles = $db->prepare('SELECT * FROM taille'); 
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
$colors = $db->prepare('SELECT * FROM couleur'); 
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

function insertDuck($newDuck)
{
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');
$newDuck = $db->prepare('INSERT INTO canard (taille, couleur, material, accessory) VALUES (:taille, :couleur, :material, :accessory)'); 
$newDuck->bindParam(':taille',$_POST['taille']);
$newDuck->bindParam(':couleur',$_POST['couleur']);
$newDuck->bindParam(':material',$_POST['material']);
$newDuck->bindParam(':accessory',$_POST['accessory']);
$newDuck->execute();

/*$lastId = $db->lastInsertId();
foreach ($duckData['genres'] as $value) {
$game_genre = $db->prepare('INSERT INTO videogame_genres (id_videogame, id_genre) VALUES (:id_videogame, :id_genre)');
$game_genre->bindParam('id_videogame', $lastId);
$game_genre->bindParam('id_genre', $value);
$game_genre->execute();*/
}



function deleteGame()
{
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$deleteGame = $db->prepare("DELETE FROM `ducks`.`canard` WHERE `id`= :toDelete;");
$deleteGame->bindParam(':toDelete', $_POST['duck_to_kill']);
$deleteGame->execute();
header('Location: ../../index.php');
}
?>