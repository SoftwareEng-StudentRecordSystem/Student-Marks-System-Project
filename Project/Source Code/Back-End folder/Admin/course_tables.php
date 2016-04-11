<?php 
   include("../config_2.php");
   include("../config.php");

 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // student number and course code sent from form 

      $mynumber = mysqli_real_escape_string($link,$_POST['number']);
      $mycode = mysqli_real_escape_string($link,$_POST['code']);
      $myname = mysqli_real_escape_string($link,$_POST['name']); 
      $mysname = mysqli_real_escape_string($link,$_POST['sname']);

      $newstud = mysqli_real_escape_string($db,$_POST['sname']);
	
	$sql = "SELECT course_code FROM course_des WHERE strcmp('$mycode',course_code); ";
	
	while($result = mysqli_query($link,$sql)){
	    if($result==0)
	    {
        	 $sql = "INSERT INTO registrar VALUES('$mynumber', '$mycode') ";
         	 if($res = mysqli_query($link, $sql)){
          	 echo "Student registered to registrar.";}
   
        	 $sql = "INSERT INTO $mycode (studentID) VALUES('$mynumber')";
          	 if($res = mysqli_query($link, $sql)){ 
          	 echo "Student registered to $mycode.";}

        	 $sql = "INSERT INTO students VALUES('$mynumber','$myname','$mysname";
         	 if($res = mysqli_query($link, $sql)){ 
           	 echo "Student added to students list.";}

	         $sql = "INSERT INTO users VALUES('$mynumber','0000')";
      	         if($res = mysqli_query($db, $sql)) {
        	   echo "Student added to users list.";}
	      }

     		}
}

		 else{
        	 echo "DB Error, could not list tables\n";
        	 echo 'MySQL Error: ' . mysql_error();
        	 exit;
      		 }
   	

?>

