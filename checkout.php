
<?php require 'connection.php'?>
<?php require './partials/header_view.php' ?>;

<div class="checkout">
    <div class="checkout-box">
        <div class="ch-heading">
            <h1>Checkout</h1>
        </div>
        <hr>
        <div class="ch-head-2">
            <h3>Shipping info</h3>
        </div>
        <div class="ch-inputs">
            <div class="ch_name">
            <form action="#">
                <input id="amir" type="text" placeholder="Your name" required>
                <input type="text" placeholder="Your surname" required>
            </div>
            <div class="ch_other">
                <input type="email"placeholder="Your email" required>
                <input type="text" placeholder="Your adress" required>
                <input type="text" placeholder="Postal code" required>
            </div>
            
        </div>
        <hr id="chhr" >
        <div class="ch-card">
            <h3>Card Info</h3>
            <div class="ch_card_info">
                <input type="text" placeholder="Card name" required>
                <input type="text" placeholder="Card number" required>
                <input type="text" placeholder="Expiry" required>
                <input type="text"placeholder="CVV"  required>
            </div>
            <div class="ch-btn">
                
                <button id="btnforcheck">Place order</button>
                </form>
                
            </div>
        </div>
    </div>
</div>

<script src="check.js" ></script>

<?php require './partials/footer_view.php'; ?>