<?php require 'connection.php' ;



$id = $_GET['id'];

$sql = "DELETE FROM `cardss` WHERE `cardss`.`id` = $id"; 
$query = mysqli_query($db, $sql); 


header("Location: card_view.php");



?>