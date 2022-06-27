<?php 
require 'connection.php'; 

$id = $_GET['id']; 
$user_id = $_GET['user_id'];


$sql = "SELECT price FROM cardss WHERE user_id = '$user_id' AND game_id = '$id'"; 
$query = mysqli_query($db,$sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$row = mysqli_num_rows($query);

$sql2 = "SELECT price FROM games WHERE id = '$id'"; 
$query2 = mysqli_query($db, $sql2); 
$result2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);

foreach($result2 as $key2){
    $game = $key2['price']; 
}

foreach($result as $key){
    $res = (float)$key['price'] + (float)$game;

    $res = $res."€";
    
}





$sql_2 = "UPDATE cardss SET price='$res' WHERE game_id = '$id'";
$query_2 = mysqli_query($db,$sql_2);

// aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

$sql_3 = "SELECT price FROM gamess WHERE id = '$id'"; 
$query_3 = mysqli_query($db, $sql_3); 
$result_2 = mysqli_fetch_all($query_3, MYSQLI_ASSOC);


foreach($result_2 as $key_2){
    $game =$key_2['price']; 
 
}

echo $game; 

foreach($result as $key){
    $ress = (float)$key['price'] + (float)$game;
     
}

echo $ress; 


$sql_4 = "UPDATE cardss SET price='$ress' WHERE game_id = '$id'";
$query_4 = mysqli_query($db,$sql_4);
header('Location: card_view.php');













?>



