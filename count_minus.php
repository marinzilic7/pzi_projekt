<?php require 'connection.php' ;

$game_id = $_GET['id'];
$user_id = $_GET['user_id'];


$sql = "SELECT * FROM game_num WHERE count_id = '$game_id'";
$query2 = mysqli_query($db,$sql);
$result = mysqli_fetch_all($query2,MYSQLI_ASSOC);
$row = mysqli_num_rows($query2);

foreach($result as $key){
    $counter = $key['count_id'];
    $name = $key['name'];
}



if ($row > 0){
    $counter=-1;
    $sql = "UPDATE game_num SET count_id='$counter' WHERE count_id = '$game_id' ORDER BY count_id DESC LIMIT 1";
    $query = mysqli_query($db,$sql);

    //-----------
    $sql_1 = "SELECT price FROM cardss WHERE user_id = '$user_id' AND game_id = '$game_id'"; 
    $query_1 = mysqli_query($db,$sql_1);
    $result_1 = mysqli_fetch_all($query_1, MYSQLI_ASSOC);

    $sql_2 = "SELECT price FROM games WHERE id = '$game_id'"; 
    $query_2 = mysqli_query($db, $sql_2); 
    $result_2 = mysqli_fetch_all($query_2, MYSQLI_ASSOC);

    foreach($result_2 as $key2){
            $game = $key2['price']; 
    }

    foreach($result_1 as $key){
        $res = (float)$key['price'] - (float)$game;

        $res = $res."€";
    
    }



    $sql_3 = "UPDATE cardss SET price='$res' WHERE game_id = '$game_id'";
    $query_3 = mysqli_query($db,$sql_3);

    //-------------------------------------------------------------------------------------------------------------------------------------
    
    $sql_5 = "SELECT price FROM gamess WHERE id = '$game_id'"; 
    $query_5 = mysqli_query($db, $sql_5); 
    $result_5 = mysqli_fetch_all($query_5, MYSQLI_ASSOC);

    foreach($result_5 as $key5){
        $game = $key5['price']; 
    }

    foreach($result_1 as $key){
        $res2 = (float)$key['price'] - (float)$game;

        $res2 = $res2."€";
    
    }

    $sql_6 = "UPDATE cardss SET price='$res2' WHERE game_id = '$game_id'";
    $query_6 = mysqli_query($db,$sql_6);

    //-------------------------------------------------------------------------------------------------------------------------------------
    
    $sql_7 = "SELECT price FROM ps_games WHERE id = '$game_id'"; 
    $query_7 = mysqli_query($db, $sql_7); 
    $result_7 = mysqli_fetch_all($query_7, MYSQLI_ASSOC);

    foreach($result_7 as $key7){
        $game = $key7['price']; 
    }

    foreach($result_1 as $key){
        $res3 = (float)$key['price'] - (float)$game;

        $res3 = $res3."€";
    
    }

    $sql_8 = "UPDATE cardss SET price='$res3' WHERE game_id = '$game_id'";
    $query_8 = mysqli_query($db,$sql_8);

    //-------------------------------------------------------------------------------------------------------------------------------------
    
    $sql01 = "SELECT price FROM pc_games_2 WHERE id = '$game_id'"; 
    $query01 = mysqli_query($db, $sql01); 
    $result01 = mysqli_fetch_all($query01, MYSQLI_ASSOC);

    foreach($result01 as $key01){
        $game = $key01['price']; 
    }

    foreach($result_1 as $key){
        $res4 = (float)$key['price'] - (float)$game;

        $res4 = $res4."€";
    
    }

    $sql_001 = "UPDATE cardss SET price='$res4' WHERE game_id = '$game_id'";
    $query_001 = mysqli_query($db,$sql_001);

    //-------------------------------------------------------------------------------------------------------------------------------------
    

}
    

header('Location: card_view.php')


?>