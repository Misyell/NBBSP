<?php
$error_message = ""; // Initialize error message variable
$show_signup = true; // Initialize $show_signup variable

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
    
    // Sign up logic
    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare and bind the insert statement
        $stmt = $conn->prepare("INSERT INTO userusers (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

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

        // Query to check if the user exists and the password is correct
        $query = "SELECT * FROM userusers WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($query);

        if ($result->num_rows == 1) {
            // Redirect the user to a dashboard or homepage upon successful sign-in
            header("Location: request.php");
            exit();
        } else {
            $error_message = "Invalid username or password"; // Set error message
        }
    }

    // Close database connection
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
                    <input type="text" name="username" placeholder="Username" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required/>
                </div>
                <input type="submit" value="Login" class="btn solid" name="signin" />

            </form>
            <?php if ($show_signup) { ?> <!-- Show sign-up section based on flag -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="sign-up-form">
                               <h2 class="title">Sign up</h2>
                <?php if (!empty($error_message)) { ?>
                    <p class="error-message"><?php echo $error_message; ?></p>
                <?php } ?>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required/>
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
