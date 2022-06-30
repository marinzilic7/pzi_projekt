<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Firebox</title>
</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <div class="logo">
                <img src="./images/firebox.png" alt="" height="80px">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="naslovna.view.php">STORE</a></li>
                    <li><a href="pc.view.php">PC</a></li>
                    <li><a href="ps_view.php">PS</a></li>
                    <li><a href="xbox_view.php">XBOX</a></li>
                    
                </ul>
            </div>

            <div class="user-icon">
                <div id="shop"><?php 
                
                require 'connection.php';

                $sql3 = "SELECT * FROM cardss";
                $query3 = mysqli_query($db,$sql3);
                $row = mysqli_num_rows($query3);

                if($row > 0){
                    echo $row; 
                }
                
                
                ?></div>
                <div class="shp">
                    <a href="card_view.php"><i class="fa fa-shopping-cart" id="shp_cart" style="font-size:18px;color:#fff"></i></a>
               
                 <a href="user.php?id=<?php echo $_SESSION['id']; ?>" id="iCC" href="" ><i id="icon" class="fa fa-user-o" style="color:white"></i></a>
             
                    <a id="iC" href="<?php if(isset($_SESSION['id'])){
                    echo 'logout.php'; 
                }else{
                    header('Location:index.php');
                }
               ?>"><i id="logg_out" i class="fa fa-sign-out" style="color:white; font-size:18px"></i></a>
                </div>
                
                <div class="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

        <div class="mobile-nav">
            <div class="mobile">
                <ul>
                    <li><a href="naslovna.view.php">STORE</a></li>
                    <li><a href="pc.view.php">PC</a></li>
                    <li><a href="ps_view.php">PS</a></li>
                    <li><a href="xbox_view.php">XBOX</a></li>
                </ul>
            </div>
        </div>

