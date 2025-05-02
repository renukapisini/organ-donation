
<!DOCTYPE html>
<html>
<head>
    <title>Donation Receipts</title>
</head>
<body>
    <h2>Donation Receipts</h2>
    <form method="POST">
        Donor Name: <input type="text" name="donor_name" required><br>
        Donation Date: <input type="date" name="date" required><br>
        Hospital: <input type="text" name="hospital" required><br>
        Organ Type: <input type="text" name="organ" required><br>
        <input type="submit" value="Generate Receipt">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $receipt_data = $_POST['donor_name'] . "|" . $_POST['date'] . "|" . 
                       $_POST['hospital'] . "|" . $_POST['organ'] . "\n";
        file_put_contents("receipts.txt", $receipt_data, FILE_APPEND);
        
        echo "<h3>Receipt Generated</h3>";
        echo "<div style='border: 1px solid black; padding: 10px; margin: 10px;'>";
        echo "<p>Donor: " . htmlspecialchars($_POST['donor_name']) . "</p>";
        echo "<p>Date: " . htmlspecialchars($_POST['date']) . "</p>";
        echo "<p>Hospital: " . htmlspecialchars($_POST['hospital']) . "</p>";
        echo "<p>Organ: " . htmlspecialchars($_POST['organ']) . "</p>";
        echo "<p>Receipt ID: " . uniqid() . "</p>";
        echo "</div>";
    }
    ?>
    <a href="index.php">Back to Home</a>
</body>
</html>
