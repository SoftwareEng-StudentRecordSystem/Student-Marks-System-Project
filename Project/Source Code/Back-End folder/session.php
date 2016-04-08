<?php
   include("config.php");
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT user_no FROM users WHERE user_no = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['user_no'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
