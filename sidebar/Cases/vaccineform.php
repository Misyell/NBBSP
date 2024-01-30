<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $vaccine_type = $_POST['vaccine_type'];
    $date = $_POST['date'];
    $Hnum = $_POST['Hnum'];
    $street = $_POST['street'];
    $Brgy = $_POST['Brgy'];
    $municipality = $_POST['municipality'];
    $province = $_POST['province'];
    $contact = $_POST['contact'];

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
    $stmt = $conn->prepare("INSERT INTO vaccine (name, age, vaccine_type, date, Hnum, street, Brgy, municipality, province, contact) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sissssssss", $name, $age, $vaccine_type, $date, $Hnum, $street, $Brgy, $municipality, $province, $contact);

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
        <title>Vaccination Form</title>
        <link rel="stylesheet" href="../../style/vaccinform.css">
        <link rel="shortcut icon" href="/assets/favicon.ico">
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
                        <p class="font-weight-bold" display="block" > VACCINATION FORM</p>
                </div>    
                <!---form selection----><br>
                    
                   <!-- form -->
                <form action="vaccineform.php" method="post">
                    <a href="../Reports/vaccinationlist.php"><i class="fas fa-angle-left dropdown">Back</i></a>
                    <h2>Vaccination Form</h2>
                    <hr style="border: 2px solid #246dec; margin: 2px -1px;">
                    <!-- Form fields -->
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required><br><br>
                    
                    <label for="vaccine_type">Type of Vaccine:</label>
                    <select id="vaccine_type" name="vaccine_type" required>
                        <option value="Anti-Flu">Anti-Flu</option>
                        <option value="Anti-Pneumonia">Anti-Pneumonia</option>
                    </select>
                    
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required><br><br>
                    
                    <label for="presentadd"> Present Address</label>
                        <input type="text" id="presentadd" name="Hnum" placeholder="House Number" required>
                        <input type="text" id="presentadd" name="street" placeholder=" Street " required>
                        <input type="text" id="presentadd" name="Brgy" placeholder=" Barangay" required>
                        <input type="text" id="presentadd" name="municipality" placeholder="Municipality" required>
                        <input type="text" id="presentadd" name="province" placeholder="Province" required><br>

                        
                    
                    <label for="contact">Contact:</label>
                    <input type="tel" id="contact" name="contact" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
                    
                    <input type="submit" value="Submit">
                </form>
                </main>
                <!--main container end-->
                <footer>
                    Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
                    </footer>
                    
           
        </div>
        <!--wrapper end-->
  
        <script src="../../js/uploadpic.js"></script>
    </body>
</html>
      