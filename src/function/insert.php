<?php 
require_once('baseFunction.php');
insertDuck($_POST);
header('Location: /list.php');

?>