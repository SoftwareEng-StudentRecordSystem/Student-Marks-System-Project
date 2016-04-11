 <?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['studentNumber']);
      $mypassword = mysqli_real_escape_string($db,$_POST['passWord']); 
      $myDomain   = mysqli_real_escape_string($db,$_POST['domain']);

      
      $sql = "SELECT user_no  FROM users WHERE user_no = '$myusername' and password = '$mypassword' and domain = '$myDomain' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);

		
      if($count == 1) 
      {
	  $_SESSION['login_user'] = $myusername;

          if($_POST['domain'] == "Student"){
	   header("location: Student/log_html.php");
          }

          else if ($_POST['domain'] == "CC"){
     	    header("location: COURSE_CO_ORD/log_html.php");
           }
          else if ($_POST['domain'] == "Admin"){
	    header("location: Admin/log_html.php");
	   }

      }

        else {

          echo "You have entered the wrong password or UserID";
          header("location: login.html");      
        }
   }
?> 

