
<!DOCTYPE html>
<html>
<head>
    <title>Organ Donation Portal</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .nav { background: #f0f0f0; padding: 10px; margin-bottom: 20px; }
        .stats { display: flex; justify-content: space-around; margin: 20px 0; }
        .stat-box { background: #e0e0e0; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="nav">
        <h1>Welcome to Organ Donation Portal</h1>
        <a href="register.php">Register as Donor</a> |
        <a href="donors.php">View Donors</a> |
        <a href="recipients.php">Register/View Recipients</a> |
        <a href="hospitals.php">Partner Hospitals</a> |
        <a href="receipts.php">Donation Receipts</a>
    </div>

    <div class="stats">
        <div class="stat-box">
            <?php
            $donor_count = count(file("donors.txt", FILE_IGNORE_NEW_LINES));
            echo "<h3>Total Donors</h3><p>$donor_count</p>";
            ?>
        </div>
    </div>

    <h2>Why Donate Organs?</h2>
    <ul>
        <li>Save lives</li>
        <li>Help people live better lives</li>
        <li>Create a lasting legacy</li>
        <li>Support medical research</li>
    </ul>
</body>
</html>
