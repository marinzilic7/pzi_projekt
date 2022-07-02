<?php require 'connection.php';

?>

<?php require './partials/header_view.php' ?>


<div class="game_add">
    <h1>Add Game</h1>
    <div class="game_add_sett">
        <form action="add_game_ps.php" method="post">
            <input type="text" name="game_name" placeholder="Ime igre">
            <input type="text" name="game_price" placeholder="Cijena igre">
            <input type="text" name="game_about" placeholder="Deskripcija">
            <input type="text" name="game_img" placeholder="Slika">
            <button name="add_btn_ps">ADD</button>

        </form>
    </div>
</div>

<?php require './partials/footer_view.php' ?>