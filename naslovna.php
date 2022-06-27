<?php 

require 'connection.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password']; 

$sql= "SELECT id FROM userss WHERE email = '$email' AND password = '$password'"; 

$query = mysqli_query($db,$sql);
$id = mysqli_fetch_assoc($query)['id'];

if($id){
    $_SESSION['id'] = $id; 
    header('Location:naslovna.view.php');
}else{
    
    header('Location:login.view.php');
   
}

?>

