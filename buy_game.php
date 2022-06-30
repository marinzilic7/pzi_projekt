<?php 

require 'connection.php'; 
require 'game.php';

$idd =  $_GET['id'];


$sql = "SELECT * FROM games WHERE id = '$idd'";

$query = mysqli_query($db,$sql);

$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$sql2 = "SELECT * FROM gamess WHERE id = '$idd' "; 

$query2 = mysqli_query($db,$sql2); 

$result2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);
 


?>


<?php  require './partials/header_view.php' ?>
            
       <div>
                
        </div>
        <?php foreach($result as $value):?>  
        <div class="pay-card">
            <?php echo "<img src=./pc_games_img". $value['img'].">";?>

            <div class="pay_card_headings">
                <h1><?php echo $value['name'] ?></h1>
                <p><?php echo $value['about'] ?></p>
            </div>

            <div class="final_pay">
                <p><?php echo $value['price'] ?>€</p>
                <a href="add_to_cart.php?id=<?php echo $value['id'] ?>&user_id=<?php echo $_SESSION['id']?>"><button>Add to Cart</button></a>
                 
            </div>
            
        </div>
        <?php if($_SESSION['id'] == 100): ?>
            <div class="admin-buttons">
            <a href="admin_delete.php?id=<?php echo $value['id'] ?>&user_id=<?php echo $_SESSION['id']?>"><button id="delete_admin">Delete</button></a>
            </div>  
        <?php endif;  ?>
        
        
        <?php endforeach;  ?>
    </div>

    <?php foreach($result2 as $value):?>  
        <div class="pay-card">
            <?php echo "<img src=./pc_games_img". $value['img'].">";?>

            <div class="pay_card_headings">
                <h1><?php echo $value['name'] ?></h1>
                <p><?php echo $value['about'] ?></p>
            </div>

            <div class="final_pay">
                <p><?php echo $value['price'] ?>€</p>
                <a href="add_to_card_games.php?id=<?php echo $value['id'] ?>&user_id=<?php echo $_SESSION['id']?>"><button>Add to Cart </button></a>
                
            </div>

            

             
        </div>
    <?php endforeach;  ?>

    <script src="add.js"></script>

<?php require './partials/footer_view.php' ?>

