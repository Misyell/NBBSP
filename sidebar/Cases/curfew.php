<?php

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

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO tblcurfew (name, date, place, time, notes, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $date, $place, $time, $notes, $status);

    // Set parameters and execute
    $name = $_POST['name'];
    $date = $_POST['date'];
    $place = $_POST['place'];
    $time = $_POST['time'];
    $notes = $_POST['notes'];
    $status = $_POST['status'];

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
        <title>CURFEW FORM</title>
        <link rel="stylesheet" href="../../style/curfew.css">
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
                        <p class="font-weight-bold" display="block" > CURFEW</p>
                </div>    
                <!---form selection----><br>
                    
                    <form action="curfew.php" method="post">
                        <h2>Curfew Form
                        </h2>
                        <hr style="
                        border: 1px solid #171922;
                        margin: 2px -1px;
                        ">
                        <label for="name">Name </label>
                        <input type="text" id="name" name="name" required>

                        <label for="date">Date </label>
                        <input type="date" id="date" name="date" required><br>
                         
                         <label for="place">Place of Apprehenson</label>
                        <input type="text" id="place" name="place"   required>
                        

                         <label for="time">Time of Apprehenson </label>
                         <input type="time" id="time" name="time" required><br>
                          
                
                        <label for="notes">Notes</label>
                        <input type="text" id="notes" name="notes"  placeholder="Notes" required>
						<br>
                        <label for="status"> Status</label>
                        <input type="radio" name="status" value="Ongoing" required> Ongoing
                        <input type="radio" name="status" value="Resolved" required> Resolved 
                        <input type="radio" name="status" value="Closed" required> Closed <br>
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
      