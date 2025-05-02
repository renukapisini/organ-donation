<!DOCTYPE html>
<html>
<head><title>Register Donor</title></head>
<body>
    <h2>Donor Registration</h2>
    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Age: <input type="number" name="age" required><br>
        Blood Group: <input type="text" name="blood" required><br>
        Organ: <input type="text" name="organ" required><br>
        Contact: <input type="text" name="contact" required><br>
        <input type="submit" value="Register">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST['name'] . "|" . $_POST['age'] . "|" . $_POST['blood'] . "|" . $_POST['organ'] . "|" . $_POST['contact'] . "\n";
    file_put_contents("donors.txt", $data, FILE_APPEND);
    echo "<p>Donor registered successfully!</p>";
}
?>
</body>
</html>
