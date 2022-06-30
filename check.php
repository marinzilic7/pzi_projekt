<?php require 'connection.php';

$sql = "SELECT * FROM cardss"; 
$query = mysqli_query($db, $sql); 
$row = mysqli_num_rows($query);

if($row > 0){
    header('Location:checkout.php'); 
}else{
    echo "<script language='javascript'>alert('Kosarica je prazna!');window.location.replace('card_view.php');</script>"; 
}

?>