<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounting service selection</title>
</head>
<body>

<form method="post">
    Select Account Service: <br>

    <input type="checkbox" name="Services[]" value="Savings Account">
    Savings Account <br>

    <input type="checkbox" name="Services[]" value="Current Account">
    Current Account <br>

    <input type="checkbox" name="Services[]" value="Online Banking">
    Online Banking <br>

    <input type="checkbox" name="Services[]" value="Debit Card">
    Debit Card <br><br>

    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST["Services"])) {
    echo "Selected Account Services:<br>";

    foreach ($_POST["Services"] as $service) {
        echo $service . "<br>";
    }
}
?>

</body>
</html>