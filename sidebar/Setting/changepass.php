<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish database connection (Replace with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_barangay";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("UPDATE changepass SET password=?, phone_number=? WHERE email=?");
    $stmt->bind_param("sss", $password, $phone_number, $email);

    // Set parameters and execute
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];

    if ($stmt->execute()) {
        echo "<script>alert('Form submitted successfully');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PASSWORD SETTING</title>
        <link rel="stylesheet" href="../../style/changepass.css">
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
                        <p class="font-weight-bold" display="block" > Password Setting</p>
                </div>    
                <!---form selection----><br>
                    

                <form action="changepass.php" method="post" class="container">

                 
                            <a href="./listofuser.php"><i class="fas fa-angle-left dropdown">Back</i></a>

                            <span>Change Password
                            </span>
                            <hr style="
                            border: 2px solid #246dec;
                            margin: 2px -1px;
                            ">

                        
                        <div class="col-md-2"> 
                       
                  <label for="email">Email</label>
                        <input type="email" id="email" name="email"  placeholder="Email" required>
                       <br>
                        <label for="password"> Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <br>
                        <label for="phone_number">Contact</label>
                        <input type="number" id="phone_number" name="phone_number" placeholder=" Phone Number" required>
                        <br>
                                    
                        <div class="button-container-1">
                            <input type="submit" value="Submit">
                            
                          </div>
                        </div>
                        
                    </form>
    
                </main>
                <!--main container end-->
                <footer>
                    Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
            </footer>
            
                </div>
  

                <script src="../../js/uploadpic.js"></script>
    </body>
</html>
      