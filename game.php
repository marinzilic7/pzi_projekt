<?php 

require 'connection.php';

//PC GAMES

$sql = 'SELECT * FROM games';

$query = mysqli_query($db,$sql);

$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$sql2 = 'SELECT * FROM gamess'; 

$query2 = mysqli_query($db,$sql2); 

$result2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);



//PS GAMES

$sql3 = 'SELECT * FROM ps_games';

$query3 = mysqli_query($db,$sql3);

$result3 = mysqli_fetch_all($query3, MYSQLI_ASSOC);

$sql4 = 'SELECT * FROM pc_games_2';

$query4 = mysqli_query($db,$sql4);

$result4 = mysqli_fetch_all($query4, MYSQLI_ASSOC);

//XBOX GAMES

$sql5 = 'SELECT * FROM xbox';

$query5 = mysqli_query($db,$sql5);

$result5 = mysqli_fetch_all($query5, MYSQLI_ASSOC);

$sql6 = 'SELECT * FROM xbox_2';

$query6 = mysqli_query($db,$sql6);

$result6 = mysqli_fetch_all($query6, MYSQLI_ASSOC);
?>



    
   
   