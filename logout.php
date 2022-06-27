<?php 

require 'connection.php'; 

session_start();
session_destroy(); 
header('Location: login.view.php');


?>