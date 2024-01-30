<?php
$error_message = ""; // Initialize error message variable

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish a connection to your database
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

    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the user exists and the password is correct
    $query = "SELECT * FROM userusers WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Redirect the user to a dashboard or homepage upon successful sign-in
        header("Location: Homepage.html");
        exit();
    } else {
        $error_message = "Invalid username or password"; // Set error message
    }

    // Close database connection
    $conn->close();
}
?>