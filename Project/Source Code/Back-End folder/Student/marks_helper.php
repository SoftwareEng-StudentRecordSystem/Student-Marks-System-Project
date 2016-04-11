<html>
   <head>
      <!-- Include CSS File Here -->
      <link rel="stylesheet" href="style.css"/>

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/j$

      <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3$


      <script type="text/javascript">
         <!--

            function Redirect() {

               window.location="login.php";

            }

       </script>
   </head>

<body>

   <h1><img src="witslogo.png" alt="witslogo" />ACADEMIC RECORD PORTAL</h1>

<div id="main-wrap">

    <div id="sidebar">
<ul id="drop-nav">

<aside>

 <h2><font size="4" color="brown"> Your assessment marks for all course</h3>

<?php	
   include("../config_2.php");
   include("log.php");
  // session_start();
   
      $student = $_SESSION["login_user"];

      $sql = "SELECT course_code FROM registrar WHERE studentID = '$student'";
      $result = mysqli_query($link, $sql);

      if (mysqli_num_rows($result) > 0) {
    //    get course codes data of each row

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
           $feedback = $row["course_code"];

            echo '<h3><font size="3" color="black">';
            echo $feedback."<br>";
            echo '</h3>';       

            $sql1 = "SELECT * FROM $feedback WHERE studentID = '$student' ";

            if($result1 = mysqli_query($link, $sql1)) {
                $i = 0;

                $ans = mysqli_fetch_array($result1, MYSQLI_BOTH);

                 $res1 = $ans["test"];
                 $res2 = $ans["labs"];
                 $res3 = $ans["exam"];

                 echo '<h3><color="black">';
                 echo "test: ". $res1. " - labs: ". $res2. " - exams: "; 
                 echo  $res3;
                 echo  "<br>";
                 echo  '</h3>';
 }
        }       
} 

mysqli_close($link);

?>

<form align="right" name="form1" method="post" action="../logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">

</body>
</html>

