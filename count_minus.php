<?php require 'connection.php' ;
$game_id = $_GET['id'];
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
    
}

header('Location:card_view.php');
?>