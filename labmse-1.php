
 <html>
<body>

<form method="POST" action="">
    Student Name:
    <input type="text" name="name" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    Course:
    <select name="course" required>
        <option label="" value="">Select Subject</option>
        <option value="PHP">PHP</option>
        <option value="Java">Java</option>
        <option value="C++">C++</option>
    </select><br><br>

    Rating:
    <input type="radio" name="rating" value="1" required>
    <input type="radio" name="rating" value="2">
    <input type="radio" name="rating" value="3">
    <input type="radio" name="rating" value="4">
    <input type="radio" name="rating" value="5"><br><br>

    Feedback:<br>
    <textarea name="feedback" rows="4" cols="49"></textarea><br><br>

    Suggestion:<br>
    <textarea name="suggestion" rows="4" cols="49"></textarea><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];
    $suggestion = $_POST['suggestion'];

    echo "<br> Feedback Submitted Successfully <br>";
    echo "Student Name: " . $name . "<br>";
    echo "Student ID: " . $student_id . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Course: " . $course . "<br>";
    echo "Feedback: " . $feedback . "<br>";
    echo "Suggestion: " . $suggestion . "<br>";
}
?>

</body>
</html> 