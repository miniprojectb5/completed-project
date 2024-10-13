<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Feedback</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="container">
        <h1>Submit Your Feedback</h1>
        <form action="process_feedback.php" method="POST">
            <label for="teacher_name">Your Name:</label>
            <input type="text" placeholder="Enter Complete Name" id="teacher_name" name="teacher_name" required>
<br>     
            <label for="additional_comments">Gmail:</label>
            <input type="gmail" placeholder="Enter a valid email" id="additional_comments" name="additional_comments" required></textarea>
<br>
            <label for="suggestions">Mobile Number:</label>
            <input type="text" placeholder="+91" id="suggestions" name="suggestions"></textarea>
<br>
<div>
            <label>Gender:</label><br>
            <input type="radio" id="question1_yes" name="question1" value="Male" required>
            <label for="question1_yes">Male</label>
            <input type="radio" id="question1_no" name="question1" value="Female">
            <label for="question1_no">Female</label>
            <input type="radio" id="question1_maybe" name="question1" value="Other">
            <label for="question1_maybe">Other</label>
</div>
<br><div>
            <label>Department:</label><br>
            <input type="radio" id="question2_yes" name="question2" value="CME" required>
            <label for="question2_yes">CME</label>
            <input type="radio" id="question2_no" name="question2" value="ECE">
            <label for="question2_no">ECE</label>
            <input type="radio" id="question2_maybe" name="question2" value="EEE">
            <label for="question2_maybe">EEE</label>
</div>
<br>
<div>
            <label>is your work meaningful?:</label><br>
            <input type="radio" id="question3_yes" name="question3" value="Yes" required>
            <label for="question3_yes">Yes</label>
            <input type="radio" id="question3_no" name="question3" value="No">
            <label for="question3_no">No</label>
            <input type="radio" id="question3_maybe" name="question3" value="Maybe">
            <label for="question3_maybe">Maybe</label>
</div>
<br>
<div>
            <label>Are you satisfied with the current position and work assigned?:</label><br>
            <input type="radio" id="question4_yes" name="question4" value="Yes" required>
            <label for="question4_yes">Yes</label>
            <input type="radio" id="question4_no" name="question4" value="No">
            <label for="question4_no">No</label>
            <input type="radio" id="question4_maybe" name="question4" value="Maybe">
            <label for="question4_maybe">Maybe</label>
</div>
<br>
<div>
            <label>Industry relavance of the syllabus:</label><br>
            <input type="radio" id="question5_yes" name="question5" value="Yes" required>
            <label for="question5_yes">Yes</label>
            <input type="radio" id="question5_no" name="question5" value="No">
            <label for="question5_no">No</label>
            <input type="radio" id="question5_maybe" name="question5" value="Maybe">
            <label for="question5_maybe">Maybe</label>
</div>
<br>
<div>
            <label>Any increment after achieving higher  degree/certificate:</label><br>
            <input type="radio" id="question6_yes" name="question6" value="Yes" required>
            <label for="question6_yes">Yes</label>
            <input type="radio" id="question6_no" name="question6" value="No">
            <label for="question6_no">No</label>
            <input type="radio" id="question6_maybe" name="question6" value="Maybe">
            <label for="question6_maybe">Maybe</label>
</div>
<br>
<div>
            <label>Is pension and gratuity facility available?:</label><br>
            <input type="radio" id="question7_yes" name="question7" value="Yes" required>
            <label for="question7_yes">Yes</label>
            <input type="radio" id="question7_no" name="question7" value="No">
            <label for="question7_no">No</label>
            <input type="radio" id="question7_maybe" name="question7" value="Maybe">
            <label for="question7_maybe">Maybe</label>
</div>
<br>
<div>
            <label>Syllabus is suitable to the course:</label><br>
            <input type="radio" id="question8_yes" name="question8" value="Yes" required>
            <label for="question8_yes">Yes</label>
            <input type="radio" id="question8_no" name="question8" value="No">
            <label for="question8_no">No</label>
            <input type="radio" id="question8_maybe" name="question8" value="Maybe">
            <label for="question8_maybe">Maybe</label>
</div>
<br>
<div>

            <label>The prescribed books are available in the library in sufficient numbers:</label><br>
            <input type="radio" id="question9_yes" name="question9" value="Yes" required>
            <label for="question9_yes">Yes</label>
            <input type="radio" id="question9_no" name="question9" value="No">
            <label for="question9_no">No</label>
            <input type="radio" id="question9_maybe" name="question9" value="Maybe">
            <label for="question9_maybe">Maybe</label>
</div>
<br>
<div>
            <label>The course/syllabus has good balance between theory and lab:</label><br>
            <input type="radio" id="question10_yes" name="question10" value="Yes" required>
            <label for="question10_yes">Yes</label>
            <input type="radio" id="question10_no" name="question10" value="No">
            <label for="question10_no">No</label>
            <input type="radio" id="question10_maybe" name="question10" value="Maybe">
            <label for="question10_maybe">Maybe</label>
</div>
<br>
<div>
            <label>The booksprescribed/listed as reference materials are relavent ,updated & appropriate:</label><br>
            <input type="radio" id="question11_yes" name="question11" value="Yes" required>
            <label for="question11_yes">Yes</label>
            <input type="radio" id="question11_no" name="question11" value="No">
            <label for="question11_no">No</label>
            <input type="radio" id="question11_maybe" name="question11" value="Maybe">
            <label for="question11_maybe">Maybe</label>
</div>
<br>
<div>
            <label>contents of curriculam are as per the industry requirement:</label><br>
            <input type="radio" id="question12_yes" name="question12" value="Yes" required>
            <label for="question12_yes">Yes</label>
            <input type="radio" id="question12_no" name="question12" value="No">
            <label for="question12_no">No</label>
            <input type="radio" id="question12_maybe" name="question12" value="Maybe">
            <label for="question12_maybe">Maybe</label>
</div>
<br>

            <div>
            <button onclick="window.location='http://localhost/mainhome.html'">HOME</button>&nbsp;&nbsp;&nbsp;&nbsp;
		<button  type="submit">Submit Feedback</button>
		</div>
        </form>
    </div>
</body>
</html>

