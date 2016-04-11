<html>
<head>
<!-- Include CSS File Here -->
<link rel="stylesheet" href="style.css"/>
</head>

<body>
   <h1><img src="witslogo.png" alt="witslogo" /> ACADEMIC RECORD PORTAL</h1>
<div id="main-wrap">
    <div id="sidebar">

<ul id="drop-nav">
<aside>
 <h2><font size="4" color="brown"> Select course</h2>

<form action="view_marks.php"  class = "getMarks" method = "post" >
            <label>Course code :</label><input type = "text" name = "course" class = "box"/><br /><br />
<input type="submit" value="Submit" >
          </form>


<form align="right" name="form1" method="post" action="../logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</body>
</html>


