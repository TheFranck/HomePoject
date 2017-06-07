<?php
$db = new PDO('mysql:host=localhost;dbname=ducks', 'root','0000');

$utilisateurs = $db->prepare('SELECT * FROM ducks.user WHERE username = :username AND password= :password'); 
$utilisateurs->bindParam(':username', $_POST['username']);
$utilisateurs->bindParam(':password', $_POST['password']);
$utilisateurs->execute();

if($utilisateurs->fetch()== False) {
    header('Location: /index.php');
} else {
    session_start();
    $_SESSION['isConnected'] = True;
    header ('Location: /index.php');
}
 ?>