
<!DOCTYPE html>
<html>
<head>
    <title>Register Recipient</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        form { margin: 20px 0; }
        input { margin: 5px 0; }
    </style>
</head>
<body>
    <h2>Recipient Registration</h2>
    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Age: <input type="number" name="age" required><br>
        Blood Group: <input type="text" name="blood" required><br>
        Required Organ: <input type="text" name="organ" required><br>
        Medical Condition: <input type="text" name="condition" required><br>
        Hospital: <input type="text" name="hospital" required><br>
        Contact: <input type="text" name="contact" required><br>
        <input type="submit" value="Register">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST['name'] . "|" . $_POST['age'] . "|" . $_POST['blood'] . "|" . 
            $_POST['organ'] . "|" . $_POST['condition'] . "|" . $_POST['hospital'] . "|" . 
            $_POST['contact'] . "\n";
    file_put_contents("recipients.txt", $data, FILE_APPEND);
    echo "<p>Recipient registered successfully!</p>";
}
?>

    <h3>Current Recipients</h3>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Blood Group</th>
            <th>Required Organ</th>
            <th>Medical Condition</th>
            <th>Hospital</th>
            <th>Contact</th>
        </tr>
<?php
if (file_exists("recipients.txt")) {
    $lines = file("recipients.txt", FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $parts = explode("|", $line);
        echo "<tr>";
        foreach ($parts as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }
}
?>
    </table>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
