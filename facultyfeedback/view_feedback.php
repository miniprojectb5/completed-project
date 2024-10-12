<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$teacher_name = "";
$feedbacks = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacher_name = $_POST['teacher_name'];

    $stmt = $conn->prepare("SELECT question1, question2, question3, question4, question5, question6, question7, question8, question9, question10, question11, question12, additional_comments, suggestions, created_at FROM feedback WHERE teacher_name = ?");
    $stmt->bind_param("s", $teacher_name);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $feedbacks[] = $row;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feedback</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="container">
        <h1>View Faculty Feedback</h1>
        <form method="POST" action="">
            <label for="teacher_name">Teacher Name:</label>
            <input type="text" id="teacher_name" name="teacher_name" required>
            <div>
                <input type="button" onclick="window.location='http://localhost/home.php'" value="Back"/>&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit">View Feedback</button>
</div>
        </form>

        <?php if ($teacher_name): ?>
            <h2>Feedback for <?php echo htmlspecialchars($teacher_name); ?></h2>
            <?php if (!empty($feedbacks)): ?>
                <?php foreach ($feedbacks as $feedback): ?>
                    <div class="feedback">
 			<strong>Gmail:</strong> <?php echo 								htmlspecialchars($feedback['additional_comments']); ?><br>
                        <strong>Mobile Number:</strong> <?php echo htmlspecialchars($feedback['suggestions']); ?><br>
                        <strong>Gender:</strong> <?php echo htmlspecialchars($feedback['question1']); ?><br>
                        <strong>Department:</strong> <?php echo htmlspecialchars($feedback['question2']); ?><br>
                        <strong>is your work meaningful?:</strong> <?php echo htmlspecialchars($feedback['question3']); ?><br>
                        <strong>Are you satisfied with the current position & work assigned?:</strong> <?php echo htmlspecialchars($feedback['question4']); ?><br>
                        <strong>Industry relavance of the syllabus:</strong> <?php echo htmlspecialchars($feedback['question5']); ?><br>
                        <strong>Any increment after achieving higher  degree/certificate:</strong> <?php echo htmlspecialchars($feedback['question6']); ?><br>
                        <strong>Is pension and gratuity facility available?:</strong> <?php echo htmlspecialchars($feedback['question7']); ?><br>
                        <strong>Syllabus is suitable to the course:</strong> <?php echo htmlspecialchars($feedback['question8']); ?><br>
                        <strong>The prescribed books are available in the library in sufficient numbers:</strong> <?php echo htmlspecialchars($feedback['question9']); ?><br>
                        <strong>The course/syllabus has good balance between theory and lab:</strong> <?php echo htmlspecialchars($feedback['question10']); ?><br>
                        <strong>The booksprescribed/listed as reference materials are relavent ,updated & appropriate:</strong> <?php echo htmlspecialchars($feedback['question11']); ?><br>
                        <strong>contents of curriculam are as per the industry requirement:</strong> <?php echo htmlspecialchars($feedback['question12']); ?><br>
                       <br>
                        <em>Submitted on: <?php echo $feedback['created_at']; ?></em>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No feedback found for this teacher.</p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>
