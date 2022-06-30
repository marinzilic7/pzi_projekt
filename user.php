<?php require 'connection.php'; 

$id = $_GET['id']; 

$sql = "SELECT * FROM userss WHERE id = '$id' "; 
$query = mysqli_query($db,$sql); 
$result = mysqli_fetch_all($query, MYSQLI_ASSOC); 

$sql2 = "SELECT * FROM administrator WHERE id = '$id' "; 
$query2 = mysqli_query($db,$sql2); 
$result = mysqli_fetch_all($query2, MYSQLI_ASSOC); 





?>

<?php require './partials/header_view.php'; ?>

<?php foreach($result as $key):  ?>
    <div class = 'welcome_div'>
        <h1>Welcome <?php echo $key['name'];?></h1>
    </div>

    <div class="panel">
        <div class="panel_admin">
            <div class="panel_settings">
                <h4>Your name :</h4>
                <input type="text" value="<?php echo $key['name'];?>">
                <h4>Your surname : </h4>
                <input type="text" value="<?php echo $key['surname'];?>">
                <h4>Your username :</h4>
                <input type="email" value="<?php echo $key['email'];?>">
               <a href="change_password.php?id=<?php echo $key['id']; ?>"><button>Change password</button></a> 
            </div>
        </div>
    </div>
    
<?php endforeach;  ?>