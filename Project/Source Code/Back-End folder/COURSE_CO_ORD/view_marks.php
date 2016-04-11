<?php
   include("../config_2.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      $mycourse   = mysqli_real_escape_string($link,$_POST['course']);


      $sql = "SELECT course_code  FROM registrar WHERE course_code = '$mycourse'";
     
	 while($result = mysqli_query($link,$sql)) 
	 {
     	     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	     $sql1 = "SELECT studentID, test, labs, exam FROM '$mycourse'";

	    if($ans = mysqli_query($link,$sql1))
	    {
		echo "student no \n\n  test \n\n labs \n\n  exam\n\n ";
		while($row = mysqli_fetch_assoc($result))
		 {
       		 echo  $row["studentID"];
	         echo  $row["test"];
		 echo  $row["labs"];
		 echo  $row["exams"]. "<br>";
   		 }
	    }
        } 
     } else {
   	      echo "0 results";
	    }
mysqli_close($link);

?>

