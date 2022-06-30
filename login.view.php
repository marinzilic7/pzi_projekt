
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Firebox</title>
</head>
<body>
<div data-aos="zoom-in">
    <div class="container">
        <div class="reg-form-2">
                <div class="image">
                    <img src="./images/firebox.png" alt="" height="150px">
                </div>
                <div class="heading-2">
                    <h2>Sign in with an Firebox account</h2>
                </div>
                <div class="reg">
                    <form action="naslovna.php" method="post" >
                        <div class="inputs"> 
                            <input type="Email" name="email" placeholder="Email" required>
                            <input type="Password" name="password" placeholder="Password" required>
                            <p id="pw"></pi>
                        </div>
                        <div class="button">
                            <button>Continue</button>
                        </div>
                        <a id ="acc" href="index.php">Don't have an Firebox account? <span id ="span" >Register</span></a>
                    
                    </form>
                    
                </div>
        </div>
        
    </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>


<?php require 'connection.php'; ?>



