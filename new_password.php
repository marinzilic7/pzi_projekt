<?php require 'connection.php' ;



if(isset($_POST['btn'])){
    $id = $_GET['id']; 
    $new_pass = $_POST['new_pass']; 

    $sql = "UPDATE userss SET password='$new_pass' WHERE id = '$id'";
    $query = mysqli_query($db,$sql);

    echo "<script language='javascript'>alert('Uspijesno promijenjen password! Prijavite se opet!');window.location.replace('new_password.php');</script>";
}else{
    header('Location: naslovna.php');
}

?>