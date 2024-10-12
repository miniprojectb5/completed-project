<?php
include("configASL.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:index.php");
}
$aid=$_SESSION['aid'];
$x=mysqli_query($al,"select * from admin where aid='$aid'");
$y=mysqli_fetch_array($x);
$name=$y['name'];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Feedback System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="topHeader">
	CMC B5 PROJECT<br />
    <span class="tag">STUDENT FEEDBACK SYSTEM</span>
</div>
<br>
<br>
<br>
<br>

<div id="content" align="center">
<br>
<br>
<span class="SubHead">Welcome  <?php echo $name;?></span>
<br>
<br>


<a href="feeds.php" class="button">Student Feedback</a>
<a href="manageFaculty.php" class="button">Manage Faculty</a>
<a href="facultyfeedback/view_feedback.php" class="button"> Faculty Feedback</a>
<br>
<br>
<br>
<a href="view_feedback.php" class="button">Complaint</a>
<a href="changePass.php" class="button">Change Password</a>
<a href="logout.php" class="button">Logout</a>
<br>
<br>

</div>
</body>
</html>
