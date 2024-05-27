<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch house details
$sql = "SELECT id, house_number, location, price, owner_name FROM houses";
$result = $conn->query($sql);

$houses = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $houses[] = $row;
    }
} else {
    echo "No houses found.";
}
$conn->close();
