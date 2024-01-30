<?php
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

    // Prepare and bind the insert statement
    $stmt = $conn->prepare("INSERT INTO userusers (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    // Set parameters and execute
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if username or email already exists
    $check_query = "SELECT * FROM userusers WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo "Username or email already exists";
    } else {
        // Insert the new record
        $stmt->execute();
        echo "New record created successfully";
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>