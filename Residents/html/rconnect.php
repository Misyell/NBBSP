<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_barangay";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Close statement and connection
$stmt->close();
$conn->close();
?>