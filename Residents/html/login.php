<!-- table name- 	userusers -->
<?php
$error_message = ""; 
$show_signup = true; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
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
    
    // Sign up logic
    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $ename = $_POST['ename'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $bday = $_POST['bday'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];

        $address_parts = explode(" ", $address);
        $hnum = isset($address_parts[0]) ? $address_parts[0] : "";
        $street = isset($address_parts[1]) ? $address_parts[1] : "";
        $brgy = isset($address_parts[2]) ? $address_parts[2] : "";
        $municipality = isset($address_parts[3]) ? $address_parts[3] : "";
        $province = isset($address_parts[4]) ? $address_parts[4] : "";

        // Prepare and bind the insert statement
        $stmt = $conn->prepare("INSERT INTO userusers (username, fname, mname, lname, ename, email, phone, address, bday, gender, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssss", $username, $fname, $mname, $lname, $ename, $email, $phone, $address, $bday, $gender, $password);

        $stmt2 = $conn->prepare("INSERT INTO tblresident (fname, mname, lname, ename, phone, hnum, street, brgy, municipality, province, bday, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt2->bind_param("ssssssssssss", $fname, $mname, $lname, $ename, $phone, $hnum, $street, $brgy, $municipality, $province, $bday, $gender);
        $stmt2->execute();
        $stmt2->close();
        // Check if username or email already exists
        $check_query = "SELECT * FROM userusers WHERE username = '$username' OR email = '$email'";
        $result = $conn->query($check_query);

        if ($result->num_rows > 0) {
            $error_message = "Username or email already exists";
        } else {
            // Insert the new record
            $stmt->execute();
            $error_message = "New record created successfully";
        }

        // Close statement and database connection
        $stmt->close();
       
    }

    // Sign in logic
    if (isset($_POST['signin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM userusers WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($query);

        if ($result->num_rows == 1) {
            header("Location: request.php");
            exit();
        } else {
            $error_message = "Invalid username or password"; 
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css" />
    <title>Sign in & Sign up Form</title>
    <title>NBBSP</title>
        <meta name="description" content="barangay management information system" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#03a9f4" />
        <meta name="apple-mobile-web-app-status-bar-style" content="default" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@site" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:title" content="barangay management information system" />
        <meta name="twitter:description" content="barangay management information system" />
        <meta name="twitter:image" content="" />

        <!-- Open Graph -->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Barangay management information system" />
        <meta property="og:description" content="Barangay management information system" />
        <meta property="og:site_name" content="My App" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />

        <link rel="manifest" href="../html/manifest.json" />
        <script async src="https://unpkg.com/pwacompat" crossOrigin="anonymous"></script>

        <!-- Apple touch icon -->
        <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-touch-icon_120.png" />
    </head>


        <script>
            if ("serviceWorker" in navigator) {
                window.addEventListener("load", function () {
                    navigator.serviceWorker
                        .register("../html/serviceWorker.js")
                        .then((registration) => {
                            console.log("SW registration successful");
                        });
                });
            }
        </script>
    </body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <?php if (!empty($error_message)) { ?>
                    <p class="error-message"><?php echo $error_message; ?></p>
                <?php } ?>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="username" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required/>
                </div>
                <input type="submit" value="Login" class="btn solid" name="signin" />

            </form>
            <?php if ($show_signup) { ?> 
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="sign-up-form">
                               <h2 class="title">Sign up</h2>
                <?php if (!empty($error_message)) { ?>
                    <p class="error-message"><?php echo $error_message; ?></p>
                <?php } ?>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="UserName" required/>
                </div>
                <div class="input-field-1">
                    <i class="fas fa-user"></i>
                    <input type="text" name="fname" placeholder="First Name" required/>
            
                    <i class="fas fa-user"></i>
                    <input type="text" name="mname" placeholder="Middle Name" />
                </div>
                <div class="input-field-1">
                    <i class="fas fa-user"></i>
                    <input type="text" name="lname" placeholder="Last Name" required/>
             
                    <i class="fas fa-user"></i>
                    <input type="text" name="ename" placeholder="ex. (Jr/Sr)" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-phone"></i>
                    <input type="num" name="phone" placeholder="Phone" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-home"></i>
                    <input type="text" name="address" placeholder="Address" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-birthday-cake"></i>
                    <input type="date" name="bday" placeholder="Birthday" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-venus-mars"></i>
                    <input type="text" name="gender" placeholder="Gender" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required/>
                </div>
                <input type="submit" value="Sign up" class="btn" name="signup" />

            </form>
            <?php } ?>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
            <div class="logo">
                    <img src="../img/logo-modified.png" alt="">
                </div>
                <h3>New here ?</h3>
                <p>
                Click the sign up to create your account and unlock Barangay Services.
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Sign up
                </button>
            </div>
        </div>
        <div class="panel right-panel">
            <div class="content">
                <div class="logo">
                    <img src="../img/logo-modified.png" alt="">
                </div>
                <h3>Already have an account?</h3>
                <p>
                 Log in here to access your profile and continue using our services!
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    Sign in
                </button>
            </div>
        </div>
    </div>
</div>

<script src="../js/app.js"></script>
</body>
</html>
