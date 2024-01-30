<?php
// Define the request amounts array
$requestAmounts = array(
    "Barangay ID" => 50,
    "Barangay Indigency" => 0,
    "Barangay Certificate" => 50,
    "Certificate Jobseeker" => 50,
    "Oath Taking Jobseeker" => 50,
    "Business Clearance" => 50,
    "Business Clearance-Closure" => 50,
    "Certificate for Legal Guardian" => 50,
    "Certificate No Birth-certificate" => 50,
    "Certificate Burial" => 50,
    "Fisheries Certification" => 50,
    "Permit Occasion" => 50,
    "Barangay Protection Order" => 50,
    "Solo Parent" => 50,
    "Travel Permit" => 50,

);
// Initialize other variables
// Initialize other variables
$selectedType = $amount = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $selectedType = isset($_POST['type']) ? $_POST['type'] : '';
    $amount = isset($requestAmounts[$selectedType]) ? $requestAmounts[$selectedType] : 0;
}
// Database credentials
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

// Initialize variables to store form data
$type = $amount = $purpose = $date = $requestname = $Household_num = $street = "";
$Brgy = $municipality = $province = $documenttax = $notes = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];
    $amount = $_POST['amount'];
    $purpose = $_POST['purpose'];
    $date = $_POST['date'];
    $requestname = $_POST['requestname'];
    $Household_num = $_POST['Household_num'];
    $street = $_POST['street'];
    $Brgy = $_POST['Brgy'];
    $municipality = $_POST['municipality'];
    $province = $_POST['province'];
    $documenttax = $_POST['documenttax'];
    $notes = $_POST['notes'];

    // Insert form data into database
    $sql = "INSERT INTO clearance_certificates (type, amount, purpose, date, requestname, Household_num, street, Brgy, municipality, province, documenttax, notes)
            VALUES ('$type', '$amount', '$purpose', '$date', '$requestname', '$Household_num', '$street', '$Brgy', '$municipality', '$province', '$documenttax', '$notes')";

    if ($conn->query($sql) === TRUE) {
        // Check if amount is 0 and display pop-up message with reference number
        if ($amount == 0) {
            echo '<script>alert("Your submission was successful! Reference number: 123456");</script>';
        } else {
            echo "Your submission was successful!";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve request amounts from database
$sql = "SELECT type, amount FROM request_amounts";
$result = $conn->query($sql);

$requestAmountsFromDB = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $requestAmountsFromDB[$row["type"]] = $row["amount"];
    }
}

// Merge the arrays (overwrite values from database if they exist)
$requestAmounts = array_merge($requestAmounts, $requestAmountsFromDB);

// Retrieve selected type of request and its amount
$selectedType = isset($_POST['type']) ? $_POST['type'] : '';
$amount = isset($requestAmounts[$selectedType]) ? $requestAmounts[$selectedType] : 0;

// Set document tax based on the amount
$documentTax = ($amount > 0) ? "Paid" : "Free";

// Change button text and link based on document tax status
$buttonText = ($documentTax == "Free") ? "Submit" : "Next";
$buttonLink = ($documentTax == "Free") ? "submit_form.php" : "./payment.html";

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../css/request.css">

</head>
<body>
<div class="wrapper">
    <!-- Sidebar bg -->
    <img src="assets/img/sidebar-bg.jpg" alt="sidebar img" class="bg-image">

    <!--=============== HEADER ===============-->
    <header class="header">
        <div class="header__container container">
            <div class="header__toggle" id="header-toggle">
                <i class="ri-menu-line"></i>
            </div>


    </header>

    <!--=============== SIDEBAR ===============-->
    <div class="sidebar" id="sidebar">
        <nav class="sidebar__container">
            <div class="sidebar__logo">
                <img src="../img/logo-modified.png" alt="" class="sidebar__logo-img">
            </div>

            <div class="sidebar__content">

                <div class="sidebar__list">
                    <a href="./profile.html" class="sidebar__link active-link">
                        <i class="ri-user-line"></i>
                        <span class="sidebar__link-name">Profile</span>
                        <span class="sidebar__link-floating">Profile</span>
                    </a>

                    <a href="./Homepage.html" class="sidebar__link">
                        <i class="ri-home-4-line"></i>
                        <span class="sidebar__link-name">Home</span>
                        <span class="sidebar__link-floating">Home</span>
                    </a>

                    <a href="./request.html" class="sidebar__link">
                        <i class="ri-file-edit-line"></i>
                        <span class="sidebar__link-name">Request</span>
                        <span class="sidebar__link-floating">Request</span>
                    </a>

                    <a href="./complaint.html" class="sidebar__link">
                        <i class="ri-archive-fill"></i>
                        <span class="sidebar__link-name">Complaint Box</span>
                        <span class="sidebar__link-floating">Complaint Box</span>
                    </a>

                    <a href="./setting.html" class="sidebar__link">
                        <i class="ri-settings-4-line"></i>
                        <span class="sidebar__link-name">Setting</span>
                        <span class="sidebar__link-floating">Setting</span>
                    </a>
                </div>


                <div class="sidebar__list">
                    <a href="./aboutus/AboutUs.html" class="sidebar__link">
                        <i class="ri-information-fill"></i>
                        <span class="sidebar__link-name">About Us</span>
                        <span class="sidebar__link-floating">About Us</span>
                    </a>


                    <a href="./login.html" class="sidebar__link">
                        <i class="ri-logout-box-r-line"></i>
                        <span class="sidebar__link-name">Logout</span>
                        <span class="sidebar__link-floating">Logout</span>
                    </a>
                </div>
            </div>

            <div class="sidebar__account">
                <img src="../img/user.png" alt="sidebar image" class="sidebar__perfil">

                <div class="sidebar__names">
                    <h3 class="sidebar__name">Will Lens</h3>
                    <span class="sidebar__email">willens@email.com</span>
                </div>

                <i class="ri-arrow-right-s-line"></i>
            </div>
        </nav>
    </div>

    <!--=============== MAIN ===============-->
    <main class="main-container" id="main">
    <form id="requestForm" method="POST" action="<?php echo ($documentTax == 'Paid') ? './payment.html' : htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h2>Clearance & Certificates</h2>
            <hr style="border: 1px solid #171922; margin: 2px -1px;">

            <label for="type">Type of Request</label>
            <select name="type" id="type"  required>
                <option value=""> -Select- </option>
                <?php
                foreach ($requestAmounts as $key => $value) {
                  echo '<option value="' . $key . '"' . ($selectedType == $key ? ' selected' : '') . '>' . $key . '</option>';
                    }
                ?>
            </select><br>

            <label for="amount">Amount</label>
            <input type="text" id="amount" name="amount" value="<?php echo $amount; ?>" readonly><br>

            <label for="purpose">Purpose</label>
            <input type="text" id="purpose" name="purpose" placeholder="Purpose" required><br>

            <label for="date">Date Issue</label>
            <input type="date" id="date" name="date" required><br>

            <h2>Requestor Information</h2>
            <hr style="border: 1px solid #171922; margin: 2px -1px;">

            <label for="requestname">Requestor Name</label>
            <input type="text" id="requestname" name="requestname" placeholder="Requestor Name" required><br>

            <label for="radd">Requestor Address</label>
            <input type="text" id="radd" name="Household_num" placeholder="House Number" required>
            <input type="text" id="radd" name="street" placeholder="Street" required>
            <input type="text" id="radd" name="Brgy" placeholder="Barangay" required>
            <input type="text" id="radd" name="municipality" placeholder="Municipality" required>
            <input type="text" id="radd" name="province" placeholder="Province" required><br>

            <label for="documenttax">Document Tax</label>
            <input type="radio" name="documenttax" id="documenttax_free" value="Free" <?php if ($documentTax == 'Free') echo "checked"; ?> required disabled> Free
            <input type="radio" name="documenttax" id="documenttax_paid" value="Paid" <?php if ($documentTax == 'Paid') echo "checked"; ?> required > Paid
            <input type="radio" name="documenttax" id="documenttax_payatb" value="Pay at the Barangay" <?php if ($documentTax == 'Pay at the Barangay') echo "checked"; ?> required > Pay at the Barangay<br>

            <div id="paypal-button-container"></div>

            <label for="notes">Notes</label>
            <input type="text" id="notes" name="notes" placeholder="Notes" required><br>

            <div class="button-container">
                <input type="submit" value="<?php echo $buttonText; ?>">
            </div>
        </form>
    </main>

    <footer>
        Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
    </footer>
</div>
<!--=============== MAIN JS ===============-->
<script src="../js/sidebar.js"></script>
<script>
    document.getElementById('type').addEventListener('change', function() {
        var selectedType = this.value;
        var requestAmounts = <?php echo json_encode($requestAmounts); ?>;
        var amount = requestAmounts[selectedType] || 0;
        document.getElementById('amount').value = amount;
        if (amount > 0) {
            document.getElementById('documenttax_paid').checked = true;
        } else {
            document.getElementById('documenttax_free').checked = true;
        }
    });
    document.getElementById('requestForm').addEventListener('submit', function(event) {
        var documentTax = document.querySelector('input[name="documenttax"]:checked').value;
        if (documentTax === 'Paid') {
            window.location.href = 'payment.html'; // Redirect to payment page
            event.preventDefault(); // Prevent form submission
        }
        // If documentTax is 'Free', form will submit normally
    });
</script>
  <!-- Replace the "test" client-id value with your client-id -->
  <script src="https://www.paypal.com/sdk/js?client-id=AVqeQ7DWQBtp8k1czjh4xsglT6IW07TA508u4nzuZ2QqI8Al4qQXpwVsrBD8BTk6A49wzf9BePhDwN4R&currency=USD"></script>
</body>
</html>
