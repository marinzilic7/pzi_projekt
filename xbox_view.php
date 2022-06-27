
<?php require 'game.php' ?>
<?php require './partials/header_view.php' ?>

    <h3 id="tittleforpc" >XBOX Games > </h3>

    <div class="pc_games">
        <?php foreach($result5 as $value):?>
            <div class="pc_games_1">
                <a href="buy_xbox.php?id=<?php echo $value['id'] ?>"><?php echo "<img src=./pc_games_img". $value['img'].">";  ?></a>
                <div class="pc_games_pay">
                <p><?php echo $value['name'] ?></p>
                <p><?php echo $value['price'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pc_games2">
    <?php foreach($result6 as $value):?>
            <div class="pc_games_2">
                <a href="buy_xbox.php?id=<?php echo $value['id'] ?>"><?php echo "<img src=./pc_games_img". $value['img'].">";  ?></a>
                <div class="pc_games_pay">
                <p><?php echo $value['name'] ?></p>
                <p><?php echo $value['price'] ?></p>
                </div>
            </div>
            
    <?php endforeach; ?>
    </div>
    
<?php require './partials/footer_view.php' ?>