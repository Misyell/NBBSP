<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
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

    // Extract form data
    $formSelector = isset($_POST['formSelector']) ? $_POST['formSelector'] : '';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';

    // Insert data based on document type
    switch ($formSelector) {
        case "barangayID":
          $formSelector = $_POST['formSelector'];
          $amount = $_POST['amount'];
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $ename = $_POST['ename'];
            $Hnum = $_POST['Hnum'];
            $street = $_POST['street'];
            $Brgy = $_POST['Brgy'];
            $municipality = $_POST['municipality'];
            $province = $_POST['province'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $marital = $_POST['marital'];
            $name = $_POST['name'];
            $relation = $_POST['relation'];
            $contact = $_POST['contact'];
    
            // Use prepared statement to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO bid (formSelector, amount, lname, fname, mname, ename, Hnum, street, Brgy, municipality, province, dob, gender, marital, name, relation, contact)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
            $stmt->bind_param("sssssssssssssssss", $formSelector, $amount, $lname, $fname, $mname, $ename, $Hnum, $street, $Brgy, $municipality, $province, $dob, $gender, $marital, $name, $relation, $contact);
    
            // Execute the prepared statement
            if ($stmt->execute()) {
                echo '<script>alert("New record created successfully");</script>';
                header('Location: id.html');
            } else {
                echo "Error: " . $stmt->error;
            }
    
            // Close the prepared statement
            $stmt->close();            
            break;
        case "barangayIndigency":
          $formSelector = $_POST['formSelector'];
          $amount = $_POST['amount'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $marital = $_POST['marital'];
            $Hnum = $_POST['Hnum'];
            $street = $_POST['street'];
            $Brgy = $_POST['Brgy'];
            $municipality = $_POST['municipality'];
            $province = $_POST['province'];
            $request = $_POST['request'];
            $notes = $_POST['notes'];
           
            // Use prepared statement to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO brgyindigency (formSelector, amount, name, age, marital, Hnum, street, Brgy, municipality, province, request, notes)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
            $stmt->bind_param("ssssssssssss", $formSelector, $amount, $name, $age, $marital, $Hnum, $street, $Brgy, $municipality, $province, $request, $notes);
    
            // Execute the prepared statement
            if ($stmt->execute()) {
                echo '<script>alert("New record created successfully");</script>';
            } else {
                echo "Error: " . $stmt->error;
            }
    
            // Close the prepared statement
            $stmt->close();
            break;
        case "barangayCertificate":
          $formSelector = $_POST['formSelector'];
          $amount = $_POST['amount'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $marital = $_POST['marital'];
            $Hnum = $_POST['Hnum'];
            $street = $_POST['street'];
            $Brgy = $_POST['Brgy'];
            $municipality = $_POST['municipality'];
            $province = $_POST['province'];
            $request = $_POST['request'];
            $notes = $_POST['notes'];
           
            // Use prepared statement to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO brgycertificate (formSelector, amount, name, age, marital, Hnum, street, Brgy, municipality, province, request, notes)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
            $stmt->bind_param("ssssssssssss", $formSelector, $amount, $name, $age, $marital, $Hnum, $street, $Brgy, $municipality, $province, $request, $notes);
    
            // Execute the prepared statement
            if ($stmt->execute()) {
                echo '<script>alert("New record created successfully");</script>';
            } else {
                echo "Error: " . $stmt->error;
            }
    
            // Close the prepared statement
            $stmt->close();
            break;
        // Add cases for other document types
        
    }

    // Close connection
    $conn->close();
}
?>