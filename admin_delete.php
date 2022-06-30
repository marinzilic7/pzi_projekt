<?php require 'connection.php'; 

$id = $_GET['id'];

$sql = "DELETE FROM `games` WHERE `id` = $id"; 
$query = mysqli_query($db, $sql); 
header('Location:pc.view.php');




?>