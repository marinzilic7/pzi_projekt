<?php require 'connection.php'; 

$id = $_GET['id'];

$sql = "DELETE FROM `ps_games` WHERE `id` = $id"; 
$query = mysqli_query($db, $sql); 
header('Location:ps_view.php');




?>