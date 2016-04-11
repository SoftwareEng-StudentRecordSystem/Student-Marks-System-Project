<?php
    include("log.php");
?>

﻿<html>
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
        <li><span><a href="#"> Assessment Methods. </a></span></li>
        <li><span><a href="marks.php"> Student marks</a></span></li>
        <li><span><a href="#"> Table of students </a></span></li>
        <li><span><a href="#">Statistics</a></span></li>
        <li class="last"><span><a href="#">Pass rate</a></span></li>
      </ul>
</div>
    <div id="content-wrap"> More Information
      
       <li><span> Assessment Methods- Add assessment methods for students and their weighting </a></span></li>
        <li><span> Student marks - Add student result for each assessment</a></span></li>
        <li><span>Table of students - Print or display the table of students and their marks</a></span></li>
        <li><span>Statistics - Summary statistics for each assessment</a></span></li>
        <li class="last"><span>Pass rate - Class pass rate</a></span></li>
     </div>






</div>
</div>
<div id="footer">Footer</div>

<form align="right" name="form1" method="post" action="../logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</body>
</html>

