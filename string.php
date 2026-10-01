
<!DOCTYPE html>
<html>
<head>
    <title>String Length</title>
</head>
<body>

<h2>Username Validation</h2>

<form method="post">
<label>Enter Username:</label>
<input type="text" name="username">
<button type="submit">Submit</button>

</form>

<?php
// 1. strlen() — String Length
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];

    if (strlen($username) == 0) {
        echo "<p style='color:red;'>Username Required</p>";
    }
    else if (strlen($username) < 4) {
        echo "<p style='color:orange;'>Name too short - Minimum 4 characters</p>";
    }
    else {
        echo "<p style='color:green;'>Registered Successfully</p>";
    }

    echo "Username Length: " . strlen($username);

}

?>

</body>
</html>