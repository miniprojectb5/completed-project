<?php
// process_feedback.php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $feedback = $conn->real_escape_string($_POST['feedback']);

    $sql = "INSERT INTO feedbacks (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

    if ($conn->query($sql) === TRUE) {
        echo "Complaint submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="feedback-container">
        <h1>Feedback Form</h1>
       <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" placeholder="ENTER YOUR NAME" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" placeholder="ENTER VALID EMAIL" id="email" name="email" required>

            <label for="feedback">Your Feedback:</label>
            <textarea id="feedback" placeholder="ENTER YOUR COMPLAINT" name="feedback" required></textarea>
		<div class="button-container">
            <button onclick="window.location='mainhome.html'">HOME</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button  type="submit">Submit Feedback</button>
		</div>
        </form>
    </div>
</body>
</html>

