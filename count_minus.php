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

        $res = $res;
    
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

        $res2 = $res2;
    
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

        $res3 = $res3;
    
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

        $res4 = $res4;
    
    }

    $sql_001 = "UPDATE cardss SET price='$res4' WHERE game_id = '$game_id'";
    $query_001 = mysqli_query($db,$sql_001);

    //-------------------------------------------------------------------------------------------------------------------------------------

    $sql02 = "SELECT price FROM xbox WHERE id = '$game_id'"; 
    $query02 = mysqli_query($db, $sql02); 
    $result02 = mysqli_fetch_all($query02, MYSQLI_ASSOC);

    foreach($result02 as $key02){
        $game = $key02['price']; 
    }

    foreach($result_1 as $key){
        $res5 = (float)$key['price'] - (float)$game;

        $res5 = $res5;
    
    }

    $sql_002 = "UPDATE cardss SET price='$res5' WHERE game_id = '$game_id'";
    $query_002 = mysqli_query($db,$sql_002);

    //-------------------------------------------------------------------------------------------------------------------------------------

    $sql03 = "SELECT price FROM xbox_2 WHERE id = '$game_id'"; 
    $query03 = mysqli_query($db, $sql03); 
    $result03 = mysqli_fetch_all($query03, MYSQLI_ASSOC);

    foreach($result03 as $key03){
        $game = $key03['price']; 
    }

    foreach($result_1 as $key){
        $res6 = (float)$key['price'] - (float)$game;

        $res6 = $res6;
    
    }

    $sql_003 = "UPDATE cardss SET price='$res6' WHERE game_id = '$game_id'";
    $query_003 = mysqli_query($db,$sql_003);

}
    

header('Location: card_view.php')


?>