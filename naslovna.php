

<?php 

require 'connection.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password']; 

$sql= "SELECT id FROM userss WHERE email = '$email' AND password = '$password'";
$sql2 = "SELECT id FROM administrator WHERE email = '$email' AND password = '$password'";  

$query = mysqli_query($db,$sql);
$id = mysqli_fetch_assoc($query)['id'];

$query2 = mysqli_query($db,$sql2);
$admin_id = mysqli_fetch_assoc($query2)['id'];


if($admin_id){
    $_SESSION['id'] = $admin_id;
    header('Location:naslovna.view.php'); 
}else if($id){
    $_SESSION['id'] = $id; 
    header('Location:naslovna.view.php');
}else{
    //echo "<script language='javascript'>alert('Pogresan mail ili lozinka!');window.location.replace('login.view.php');</script>";
    header('Location:login.view.php');
}






?>




