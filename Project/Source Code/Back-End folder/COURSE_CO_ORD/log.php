<?php
   include("../config_2.php");
   session_start();
   
    $ID_No = $_SESSION['login_user'];
    $studentNo   = mysqli_real_escape_string($link,$ID_No);

      
      $sql = "SELECT name,surname FROM staff WHERE userID = $studentNo";
      $result = mysqli_query($link,$sql);
    
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

