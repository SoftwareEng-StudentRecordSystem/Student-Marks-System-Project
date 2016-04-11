<?php 
	include("course_tables.php");
?>

<html>
<head>
<!-- Include CSS File Here -->
<link rel="stylesheet" href="style.css"/>
</head>

<body>
   <h1><img src="witslogo.png" alt="witslogo" /> ACADEMIC RECORD PORTAL

<div id="main-wrap">
    <div id="sidebar">

<ul id="drop-nav">
<aside>

<h2><font size="4" color="brown"> Register Student:  </h2>
</div>
</div>

<h3><color = "black">
 <form action="course_tables.php" method="post">
  <fieldset>
    <legend>Enter student's personal information and course code:</legend>
    <label>Student number: </label><br>
    <input type="text" name="number"><br>
   <label> Course code:</label><br>
    <input type="text" name="code"><br><br>
   <label> Name:</label><br>
    <input type="text" name="name"><br>
   <label> Surname:</label><br>
    <input type="text" name="sname"><br><br>

    <input type="submit" value="Submit">
  </fieldset>
</form> 

<form align="right" name="form1" method="post" action="../logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</body>
</html>
