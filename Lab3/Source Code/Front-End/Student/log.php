<?php
   include("../config_2.php");
   session_start();
   
    $ID_No = $_SESSION['login_user'];
    $studentNo   = mysqli_real_escape_string($link,$ID_No);

      
      $sql = "SELECT name,surname  FROM names  WHERE studentID = $studentNo";
      $result = mysqli_query($link,$sql);
    
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<html>
   <head>

      <!-- Include CSS File Here -->
      <link rel="stylesheet" href="style.css"/>

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>     <!--These are the jquery scripts that helps to add animations-->

      <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


      <script type="text/javascript">
         <!--

            function Redirect() {

               window.location="login.php";

            }

         //-->

       </script>
   </head>


   <body>

   <h1><img src="witslogo.png" alt="witslogo" />ACADEMIC RECORD PORTAL</h1>
   <h3>Welcome: <?php echo "$row[name] $row[surname]" ?> </h3>

<div id="main-wrap">

    <div id="sidebar">



<ul id="drop-nav">

<aside>

 <h2><font size="4" color="brown"> MENU</h2>

      <ul class="Menu">

        <li><span><a href="#"> Assessment Marks for a course. </a></span></li>

        <li><span><a href="#">Statistics</a></span></li>

        <li><span><a href="#"> Assessment Marks for all courses. </a></span></li>

        

        <li class="last"><span><a href="#"> Perfomance goals </a></span></li>

      </ul>

</div>

    <div id="content-wrap"> More Information

      

       <li><span> Assessment Marks for a course - Display assessment mark for a course </a></span></li>

        <li><span> Statistics - View statistics for the assessment above </a></span></li>

        <li><span>Assessment Marks for all courses - Diplay them </a></span></li>

        <li class="last"><span>Perfomance goals - Based on current perfomance what ought to be done to pass</a></span></li>

</div>
  
  <h3><a href = "../logout.php">Sign Out</a></h3>



</body>

</html>




