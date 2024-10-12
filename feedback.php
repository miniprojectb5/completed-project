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
<span class="SubHead">Student Feedback Step I</span>
<form method="post" action="feedback_step_2.php" >
<div id="table">
	
    
    
    <div class="tr">
		<div class="td">
        	<label>Roll No : </label>
        </div>
        <div class="td">
			<select name="roll" required>
            <option value="NA" disabled selected> - - Select Roll No. - -</option>
            <?php
			for($x=133;$x<=200;$x++)
			{
				?>
                <option value="<?php echo $x;?>"><?php echo $x;?></option>
                <?php } ?>
                </select>
        </div>
    </div>
</div>
		
  <div class="tdd">
   <input type="button" onClick="window.location='mainhome.html'" value="HOME"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="NEXT" />
        </div>
    <br>
</div>
</form>
<br>

</body>
</html>