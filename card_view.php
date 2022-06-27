<?php 

require 'connection.php'; 
$sql3 = "SELECT * FROM cardss";
$query3 = mysqli_query($db,$sql3);
$result2 = mysqli_fetch_all($query3, MYSQLI_ASSOC);

//$sql2 = "INSERT INTO cardss VALUES(NULL ,'$name', '$price', '$img')";
?>

<?php require './partials/header_view.php' ?>

<div class="cart">
    <h1>Your Cart </h1>
</div>

<div class="cart_view" >
    <?php foreach($result2 as $value2): ?>
    <div class="cart_view_things">
        <div class="head_and_img">
            <?php echo "<img src=./pc_games_img". $value2['img'].">";  ?>
            <h1><?php echo $value2['name'] ?></h1>

        </div>

        
        <div class="button_count">
                <button id = 'count_minus'>-</button>
                <p id='counter'>0</p>
                <a href="count.php?id=<?php echo $value2['game_id']; ?>&user_id=<?php  echo $_SESSION['id']?>"><button id='count_plus'>+</button></a>
        </div>
       
        <div class="card_price">
            <h3><?php echo $value2['price']  ?></h3>
        </div>
        
    </div>

    <div class="delete_total">
        <div class="delete">
            <a href="delete_from_card.php?id=<?php echo $value2['id'] ?>">DELETE</a>
            
        </div>
    </div>

    <?php endforeach;  ?>

    <hr id = "cart_hr" >
</div>

<div class="total_money">
    <div class="total">
            <h2> Total :<?php  
            function total_price(){
                global $db;
                $sql4 = "SELECT SUM(price) FROM cardss";
                $query4 = mysqli_query($db,$sql4);
                $result3 = mysqli_fetch_all($query4, MYSQLI_ASSOC);
                
                foreach($result3 as $key){
                    echo round($key["SUM(price)"], 5);
                }

                
                
            }
            total_price();
            
            ?>€</h2>
            
          

           

        
            
        
    </div>
    
</div>
        
 


    


<?php require './partials/footer_view.php'; ?>
<script src = "card.js"></script>
