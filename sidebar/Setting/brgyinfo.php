<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Create table to store barangay information
    // SQL query to create table goes here...

    // File upload directory
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"][0]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"][0]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"][0] > 500000) { // Adjust size limit as needed
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file and insert data into database
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"][0], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"][0])). " has been uploaded.";

            // Prepare SQL statement for data insertion
            $stmt = $conn->prepare("INSERT INTO tblofficial (image, house_num, street, barangay, municipality, province, contact, email, barangay_cap, b_councilor1, b_personal1, b_councilor2, b_personal2, b_councilor3, b_personal3, b_councilor4, b_personal4, b_councilor5, b_personal5, b_councilor6, b_personal6, b_councilor7, b_personal7, b_councilor8, b_personal8, name1, position1, name2, position2, name3, position3, name4, position4, name5, position5) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            // Bind parameters and execute the statement
            $stmt->bind_param("sssssssssssssssssssssssssssssssssss", $image, $house_num, $street, $barangay, $municipality, $province, $contact, $email, $barangay_cap, $b_councilor1, $b_personal1, $b_councilor2, $b_personal2, $b_councilor3, $b_personal3, $b_councilor4, $b_personal4, $b_councilor5, $b_personal5, $b_councilor6, $b_personal6, $b_councilor7, $b_personal7, $b_councilor8, $b_personal8, $name1, $position1, $name2, $position2, $name3, $position3, $name4, $position4, $name5, $position5);

            // Set parameters
            $image = basename($_FILES["image"]["name"][0]); // Assuming the first file uploaded is the logo
            $house_num = $_POST["house_num"];
            $street = $_POST["street"];
            $barangay = $_POST["barangay"];
            $municipality = $_POST["municipality"];
            $province = $_POST["province"];
            $contact = $_POST["contact"];
            $email = $_POST["email"];
            $barangay_cap = $_POST["barangay_cap"];
            $b_councilor1 = $_POST["b_councilor1"];
            $b_personal1 = $_POST["b_personal1"];
            $b_councilor2 = $_POST["b_councilor2"];
            $b_personal2 = $_POST["b_personal2"];
            $b_councilor3 = $_POST["b_councilor3"];
            $b_personal3 = $_POST["b_personal3"];
            $b_councilor4 = $_POST["b_councilor4"];
            $b_personal4 = $_POST["b_personal4"];
            $b_councilor5 = $_POST["b_councilor5"];
            $b_personal5 = $_POST["b_personal5"];
            $b_councilor6 = $_POST["b_councilor6"];
            $b_personal6 = $_POST["b_personal6"];
            $b_councilor7 = $_POST["b_councilor7"];
            $b_personal7 = $_POST["b_personal7"];
            $b_councilor8 = $_POST["b_councilor8"];
            $b_personal8 = $_POST["b_personal8"];
            $name1 = $_POST["name1"];
            $position1 = $_POST["position1"];
            $name2 = $_POST["name2"];
            $position2 = $_POST["position2"];
            $name3 = $_POST["name3"];
            $position3 = $_POST["position3"];
            $name4 = $_POST["name4"];
            $position4 = $_POST["position4"];
            $name5 = $_POST["name5"];
            $position5 = $_POST["position5"];

            // Execute the statement
            $stmt->execute();
            echo '<script>alert("Records inserted successfully.");</script>';    
                    $stmt->close();
        } else {
          echo "Your submission was successful!";
        }
        
 
    }// Check if amount is 0 and display pop-up message with reference number
 

    // Close connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BARANGAY INFORMATON</title>
        <link rel="stylesheet" href="../../style/brgyinfo.css">
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
                        <p class="font-weight-bold" display="block" > BARANGAY INFO</p>
                </div>    
                <!---form selection----><br>
                    
                <form action="brgyinfo.php" method="post" enctype="multipart/form-data">
                        <h2>Barangay Information
                        </h2>
                        <hr style="
                        border: 2px solid #246dec;
                        margin: 2px -1px;
                        ">
                        <div class="file-upload">
                            <Label for="myfile" required>Barangay Logo </Label>
                            <input class="file-upload__input" type="file" name="image" id="image" multiple required>
                            <button class="file-upload__button" type="button">Choose File(s)</button>
                            <span class="file-upload__label"></span>
                        </div>
                  
                        <br>
                        <label for="presentadd"> Present Address</label>
                        <input type="text" id="presentadd" name="house_num" placeholder="House Number" required>
                        <input type="text" id="presentadd" name="street" placeholder=" Street " required>
                        <input type="text" id="presentadd" name="barangay" placeholder=" Barangay" required>
                        <input type="text" id="presentadd" name="municipality" placeholder="Municipality" required>
                        <input type="text" id="presentadd" name="province" placeholder="Province">
                        <br>
                        
                        <label for="contact">Contact Number</label>
                        <input type="number" id="contact" name="contact" placeholder="Enter your phone number" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <br>


                        <h2>Barangay Official
                        </h2>
                        <hr style="
                        border: 2px solid #246dec;
                        margin: 2px -1px;
                        ">


                        <label for="brgycap">Barangay Captain</label>
                        <input type="text" id="brgycap" name="barangay_cap"   required><br>
                        
                          <h4>Barangay Councilors</h4>  <br>
                         <label for="brgycoun">1.</label>
                        <input type="text" id="brgycoun" name="b_councilor1"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal1"   >
                        <br>
                        <label for="brgycoun">2.</label>
                        <input type="text" id="brgycoun" name="b_councilor2"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal2"   >
                        <br>
                        <label for="brgycoun">3.</label>
                        <input type="text" id="brgycoun" name="b_councilor3"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal3"   >
                        <br>
                        <label for="brgycoun">4.</label>
                        <input type="text" id="brgycoun" name="b_councilor4"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal4"   >
                        <br>
                        <label for="brgycoun">5.</label>
                        <input type="text" id="brgycoun" name="b_councilor5"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal5"   >
                        <br>
                        <label for="brgycoun">6.</label>
                        <input type="text" id="brgycoun" name="b_councilor6"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal6"   >
                        <br>
                        <label for="brgycoun">7.</label>
                        <input type="text" id="brgycoun" name="b_councilor7"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal7"   >
                        <br>
                        <label for="brgycoun">8.</label>
                        <input type="text" id="brgycoun" name="b_councilor8"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal8"   >
                        <br>
                        <h2>Barangay Official Staff
                        </h2>
                        <hr style="
                        border: 2px solid #246dec;
                        margin: 2px -1px;
                        ">
                        
                             
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name1"  >
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position1"   >
                        <br>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name2"   >
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position2"   >
                        <br>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name3"   >
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position3"   >
                        <br>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name4"   >
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position4"   >
                        <br>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name5"   >
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position5"   >
                        <br>
                        
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
    <script>
Array.prototype.forEach.call(
  document.querySelectorAll(".file-upload__button"),
  function(button) {
    const hiddenInput = button.parentElement.querySelector(
      ".file-upload__input"
    );
    const label = button.parentElement.querySelector(".file-upload__label");
    const defaultLabelText = "No file(s) selected";

    // Set default text for label
    label.textContent = defaultLabelText;
    label.title = defaultLabelText;

    button.addEventListener("click", function() {
      hiddenInput.click();
    });

    hiddenInput.addEventListener("change", function() {
      const filenameList = Array.prototype.map.call(hiddenInput.files, function(
        file
      ) {
        return file.name;
      });

      label.textContent = filenameList.join(", ") || defaultLabelText;
      label.title = label.textContent;
    });
  }
);

    </script>    
        <script src="uploadpic.js"></script>
    </body>
</html>
      s