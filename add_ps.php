<?php 
    require 'connection.php';

    $idd =  $_GET['id'];



    $sql = "SELECT name,price,img  FROM ps_games WHERE id = '$idd'";
    
    
        $query = mysqli_query($db,$sql);
    
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
        foreach($result as $value){
            $name = $value['name'];
            $price = $value['price'];
            $img = $value['img'];
        };
    
        
        $user_id = $_GET['user_id'];
   

        $sql_user = "SELECT * FROM userss WHERE id = '$user_id'"; 
        $query_user = mysqli_query($db,$sql_user);
        $result_user = mysqli_fetch_all($query_user, MYSQLI_ASSOC);
    
        
        
        $sql2 = "INSERT INTO cardss VALUES(NULL ,'$idd','$user_id', '$name', '$price','$img')";
        $query2 = mysqli_query($db,$sql2);
    
        function da_li_je_dodano($user_id, $idd){
            global $db;
            $sql3 = "SELECT * FROM cardss WHERE user_id = '$user_id' AND game_id = '$idd'";
            $query3 = mysqli_query($db,$sql3);
            $result3 = mysqli_fetch_all($query3, MYSQLI_ASSOC);
            $row = mysqli_num_rows($query3);
    
            
            
    
            if($row > 1){
                
                $sql_delete =  "DELETE FROM `cardss` WHERE user_id = '$user_id' AND game_id = '$idd'"; 
                $query_delete = mysqli_query($db,$sql_delete);
                
                echo "<script language='javascript'>alert('Igra vec dodana!');window.location.replace('pc.view.php');</script>"; 
            }else{
                header('Location:ps_view.php');
            }
    
        
    
            
        }           
    
        da_li_je_dodano($user_id,$idd);
    
        
     



?>