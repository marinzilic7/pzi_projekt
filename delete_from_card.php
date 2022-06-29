<?php require 'connection.php' ;



$id = $_GET['id'];
$gameid = $_GET['game_id'];

echo $gameid;

$counter = -1;

$sql = "DELETE FROM `cardss` WHERE `cardss`.`id` = $id"; 
$query = mysqli_query($db, $sql); 

$sql2 = "DELETE FROM `game_num` WHERE `game_num`.`count_id` = $gameid"; 
$query2 = mysqli_query($db,$sql2);
$sql3 = "DELETE FROM `game_num` WHERE `game_num`.`count_id` = $counter"; 
$query3 = mysqli_query($db,$sql3);


header("Location: card_view.php");



?>