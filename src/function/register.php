<?php 
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');

$utilisateurs = $db->prepare('SELECT * FROM ducks.user WHERE username = :username'); 
$utilisateurs->bindParam(':username', $_POST['username']);
$utilisateurs->execute();

if($utilisateurs->fetch() == False) {
    // Creer un compte
    $newUtilisateurs = $db->prepare('INSERT INTO user ( username, password ) VALUES ( :username, :password )'); 
    $newUtilisateurs->bindParam(':username', $_POST['newUsername']);
    $newUtilisateurs->bindParam(':password', $_POST['NewPassword']);

    $newUtilisateurs->execute();

    header('Location: ../index.php');
} else {
    header('Location: ../index.php');
}
  // si l'utilisateur n'existe pas, on creer un compte sinon on le renvoie a index.php
?>