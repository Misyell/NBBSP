<?php
// Database connection
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

// Prepare and bind parameters
$stmt = $conn->prepare("INSERT INTO tblresident (housetype, housenum, famnum, residenttype, gender, lname, ename, fname, mname, contact, year, myFile, dob, brn, brd, weight, height, nationality, bplace, marital, soloparent, permadd, Hnum, street, Brgy, municipality, province, osy, voter, ofw, country, job, skill, idnum, tin, pwd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssssssissssdssssssssssssssss", $housetype, $housenum, $famnum, $residenttype, $gender, $lname, $ename, $fname, $mname, $contact, $year, $myFile, $dob, $brn, $brd, $weight, $height, $nationality, $bplace, $marital, $soloparent, $permadd, $Hnum, $street, $Brgy, $municipality, $province, $osy, $voter, $ofw, $country, $job, $skill, $idnum, $tin, $pwd);

$housetype = $_POST['housetype'];
$housenum = $_POST['housenum'];
$famnum = $_POST['famnum'];
$residenttype = isset($_POST['residenttype']) ? $_POST['residenttype'] : '';
$gender = $_POST['gender'];
$lname = $_POST['lname'];
$ename = $_POST['ename'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$contact = $_POST['contact'];
$year = $_POST['year'];
$dob = $_POST['dob'];
$brn = $_POST['brn'];
$brd = $_POST['brd'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$nationality = $_POST['nationality'];
$bplace = $_POST['bplace'];
$marital = $_POST['marital'];
$soloparent = $_POST['soloparent'];
$permadd = $_POST['permadd'];
$Hnum = $_POST['Hnum'];
$street = $_POST['street'];
$Brgy = $_POST['Brgy'];
$municipality = $_POST['municipality'];
$province = $_POST['province'];
$osy = $_POST['osy'];
$voter = $_POST['voter'];
$ofw = isset($_POST['ofw']) ? $_POST['ofw'] : '';
$country = isset($_POST['country']) ? $_POST['country'] : '';
$job = $_POST['job'];
$skill = $_POST['skill'];
$idnum = $_POST['idnum'];
$tin = $_POST['tin'];
$pwd = isset($_POST['pwd']) ? implode(", ", $_POST['pwd']) : '';

// Check if a file was uploaded
if (isset($_FILES['myFile']) && $_FILES['myFile']['error'] === UPLOAD_ERR_OK) {
    $myFile = $_FILES['myFile']['name'];

    // Move uploaded file to a permanent location
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["myFile"]["name"]);
    move_uploaded_file($_FILES["myFile"]["tmp_name"], $target_file);
} else {
    $myFile = "";
}

// Execute the query
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>