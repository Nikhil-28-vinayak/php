<!DOCTYPE html>
<html>
<head>
    <title>Card Verification</title>
</head>
<body>

<form method="post">
    Enter Card Number:
    <input type="text" name="card">
    <input type="submit" name="verify" value="Verify">
</form>

<?php
if (isset($_POST['verify'])) {

    $card = $_POST['card'];

    if (strlen($card) == 16 && is_numeric($card)) {
        echo "Valid Card Number";
    } else {
        echo "Invalid Card Number";
    }
}
?>

</body>
</html>