<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nature = $_POST['nature'];
    $bname = $_POST['bname'];
    $owner = $_POST['owner'];
    $badd = $_POST['badd'];
    $valid = $_POST['valid'];
    $yearly = $_POST['yearly'];

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

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO tblbusinessform (nature, bname, owner, badd, valid, yearly) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nature, $bname, $owner, $badd, $valid, $yearly);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Form submitted successfully');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Business FORM</title>
        <link rel="stylesheet" href="../../style/busiform.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    </head>
    <body>

        <!--wrapper start-->
        <div class="wrapper">
        <?php include "../sidebar/sidebar.php";?>
            <!--main container start-->
            <main class="main-container">
                     
                
                <div class="mid-title-2">
                        <p class="font-weight-bold" display="block" > Business Form</p>
                </div>    
                <!---form selection----><br>
                    
                <form action="businessform.php" method="post">
    <!-- Form fields -->
                    <label for="nature">Nature of Business:</label>
                    <input type="text" id="nature" name="nature" placeholder="Enter Nature of Business" required>

                    <label for="bname">Business Name:</label>
                    <input type="text" id="bname" name="bname" placeholder="Enter Business Name" required><br>

                    <label for="owner">Business Owner:</label>
                    <input type="text" id="owner" name="owner" placeholder="Enter Business Owner" required>

                    <label for="badd">Address:</label>
                    <input type="text" id="badd" name="badd" placeholder="Enter Business Address" required><br>

                    <label for="valid">Validity of Permit:</label>
                    <input type="date" id="valid" name="valid" required>

                    <label for="yearly">Yearly Sales:</label>
                    <select name="yearly" required>
                        <option value="">- Select -</option>
                        <option value="Under ₱50,000">Under ₱50,000</option>
                        <option value="₱50,000 - ₱250,000">₱50,000 - ₱250,000</option>
                        <option value="₱251,000 - ₱500,000">₱251,000 - ₱500,000</option>
                        <option value="₱501,000 - ₱2.5 million">₱501,000 - ₱2.5 million</option>
                        <option value="₱2.5 million - ₱5 million">₱2.5 million - ₱5 million</option>
                        <option value="₱5 million - Above">₱5 million - Above</option>
                    </select>

                    <div class="button-container">
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </div>
                </form>
    
                </main>
                <!--main container end-->
                <footer>
                Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
                </footer>
           
        </div>
        <!--wrapper end-->

        
    </body>
</html>
      