<?php
include("log.php");
?>

<html>
<head>
<!-- Include CSS File Here -->
<link rel="stylesheet" href="style.css"/>
</head>

<body>
   <h1><img src="witslogo.png" alt="witslogo" /> ACADEMIC RECORD PORTAL</h1>
   <h3>Welcome: <?php echo "$row[name] $row[surname]" ?> </h3>
<div id="main-wrap">
    <div id="sidebar">

<ul id="drop-nav">
<aside>
 <h2><font size="4" color="brown"> MENU</h2>
      <ul class="Menu">
      <li><span><a href="student_register.html"> Register student </a></span></li>
      <li><span><a href=""> Table of students </a></span></li>
      <li><span><a href="#">Statistics</a></span></li>
      <li><span><a href="#">Comparative chart</a></span></li>
       <li><span><a href="#">Histogram</a></span></li>
      <li><span><a href="#">Offences</a></span></li>
        <li class="last"><span><a href="#"> Performance comparison</a></span></li>
      </ul>
</div>
    <div id="content-wrap"> More Information
      
       <li><span>Table of students - Print or display the table of students and their marks</a></span></li>
        <li><span>Statistics - Summary statistics for each assessment</a></span></li>
 <li><span> Comparative chart- A comparative chart of the assessment marks of the selected courses being taken</a></span></li>
       <li><span> Histogram- Assessment marks of all courses taken by the student </a></span></li>
       <li><span> Offences- e.g plagiarism and any other offece </a></span></li>
        
        <li class="last"><span> Performance comparison - In each course across different years of study</a></span></li>
     </div>






</div>
</div>


<form align="right" name="form1" method="post" action="../logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</body>
</html>

