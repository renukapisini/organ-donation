<!DOCTYPE html>
<html>
<head><title>Donors List</title></head>
<body>
    <h2>Registered Donors</h2>
    <table border="1">
        <tr><th>Name</th><th>Age</th><th>Blood Group</th><th>Organ</th><th>Contact</th></tr>
<?php
if (file_exists("donors.txt")) {
    $lines = file("donors.txt", FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $parts = explode("|", $line);
        echo "<tr>";
        foreach ($parts as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No donors yet.</td></tr>";
}
?>
    </table>
</body>
</html>
