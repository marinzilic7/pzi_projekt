<?php require 'connection.php';




if(isset($_POST['add_btn'])){
    $game_name = $_POST['game_name'];
    $game_price = $_POST['game_price'];
    $game_about = $_POST['game_about']; 
    $game_img = $_POST['game_img'];
    $sql = "INSERT INTO games VALUES(id,'$game_name','$game_price','$game_about','$game_img')"; 
    $query = mysqli_query($db,$sql);   
    header('Location:pc.view.php'); 
}



?>