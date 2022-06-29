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



foreach($result as $key){
    $ress = (float)$key['price'] + (float)$game;
     
}

 


$sql_4 = "UPDATE cardss SET price='$ress' WHERE game_id = '$id'";
$query_4 = mysqli_query($db,$sql_4);

//--------------------------------------------------------------------------------------------------

$sql_01 = "SELECT price FROM ps_games WHERE id = '$id'"; 
$query_01 = mysqli_query($db, $sql_01); 
$result_01 = mysqli_fetch_all($query_01, MYSQLI_ASSOC);

foreach($result_01 as $key_01){
    $game =$key_01['price']; 
 
}

foreach($result as $key){
    $res01 = (float)$key['price'] + (float)$game;
     
}

$sql_02 = "UPDATE cardss SET price='$res01' WHERE game_id = '$id'";
$query_02 = mysqli_query($db,$sql_02);

//-----------------------------------------------------------------------------------------------

$sql_03 = "SELECT price FROM pc_games_2 WHERE id = '$id'"; 
$query_03 = mysqli_query($db, $sql_03); 
$result_02 = mysqli_fetch_all($query_03, MYSQLI_ASSOC);

foreach($result_02 as $key_02){
    $game =$key_02['price']; 
 
}

foreach($result as $key){
    $res02 = (float)$key['price'] + (float)$game;
     
}

$sql_04 = "UPDATE cardss SET price='$res02' WHERE game_id = '$id'";
$query_04 = mysqli_query($db,$sql_04);


//-----------------------------------------------------------------------------------------------


$sql_05 = "SELECT price FROM xbox WHERE id = '$id'"; 
$query_05 = mysqli_query($db, $sql_05); 
$result_03 = mysqli_fetch_all($query_05, MYSQLI_ASSOC);

foreach($result_03 as $key_03){
    $game =$key_03['price']; 
 
}

foreach($result as $key){
    $res03 = (float)$key['price'] + (float)$game;
     
}

$sql_06 = "UPDATE cardss SET price='$res03' WHERE game_id = '$id'";
$query_06 = mysqli_query($db,$sql_06);




//-----------------------------------------------------------------------------------------------

$sql_07 = "SELECT price FROM xbox_2 WHERE id = '$id'"; 
$query_07 = mysqli_query($db, $sql_07); 
$result_04 = mysqli_fetch_all($query_07, MYSQLI_ASSOC);

foreach($result_04 as $key_04){
    $game =$key_04['price']; 
 
}

foreach($result as $key){
    $res04 = (float)$key['price'] + (float)$game;
     
}

$sql_08 = "UPDATE cardss SET price='$res04' WHERE game_id = '$id'";
$query_08 = mysqli_query($db,$sql_08);








//-----------------------------------------------------------------------------------------------

$sql_7 = "INSERT INTO game_num VALUES('id','$name','$id')"; 
$query_7 = mysqli_query($db,$sql_7);

$sql_8 = "SELECT * FROM game_num WHERE count_id = '$id'";
$query_8 = mysqli_query($db,$sql_8); 

$row2 = mysqli_num_rows($query_8);


header('Location: card_view.php');













?>



