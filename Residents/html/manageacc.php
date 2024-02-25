<?php
    $housetype = "";
    $housenum = "";
    $famnum = "";
    $residenttype ="";
    $gender = "";
    $lname = "";
    $ename = "";
    $fname = "";
    $mname = "";
    $phone = "";
    $year = "";
    $bday = "";
    $brn = "";
    $brd = "";
    $weight = "";
    $height = "";
    $nationality = "";
    $bplace = "";
    $marital = "";
    $soloparent = "";
    $permadd = "";
    $Hnum = "";
    $street = "";
    $Brgy = "";
    $municipality = "";
    $province = "";
    $osy = "";
    $voter = "";
    $ofw = "";
    $country = "";
    $job = "";
    $skill = "";
    $idnum = "";
    $tin = "";
    $pwd = "";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
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

    // Get form data
    $housetype = $_POST['housetype'];
    $housenum = $_POST['housenum'];
    $famnum = $_POST['famnum'];
    $residenttype = isset($_POST['residenttype']) ? $_POST['residenttype'] : '';
    $gender = $_POST['gender'];
    $lname = $_POST['lname'];
    $ename = $_POST['ename'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $phone = $_POST['phone'];
    $year = $_POST['year'];
    $bday = $_POST['bday'];
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
    $ofw = $_POST['ofw'];
    $country = $_POST['country'];
    $job = $_POST['job'];
    $skill = $_POST['skill'];
    $idnum = $_POST['idnum'];
    $tin = $_POST['tin'];
    $pwd = isset($_POST['pwd']) ? implode(", ", $_POST['pwd']) : ''; // Serialize the array into a string



    // Repeat the process for all other form fields

    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["myFile"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["myFile"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    // Check file size
    
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    


    // Insert into tblresident
    $sql = "INSERT INTO tblresident (housetype, housenum, famnum, residenttype, gender, lname, ename, fname, mname, contact, year, dob, brn, brd, weight, height, nationality, bplace, marital, soloparent, permadd, Hnum, street, Brgy, municipality, province, osy, voter, ofw, country, job, skill, idnum, tin, pwd, myFile) 
    VALUES ('$housetype', '$housenum', '$famnum', '$residenttype', '$gender', '$lname', '$ename', '$fname', '$mname', '$contact', '$year', '$dob', '$brn', '$brd', '$weight', '$height', '$nationality', '$bplace', '$marital', '$soloparent', '$permadd', '$Hnum', '$street', '$Brgy', '$municipality', '$province', '$osy', '$voter', '$ofw', '$country', '$job', '$skill', '$idnum', '$tin', '$pwd', '$target_file')";
    
    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("New record created successfully");</script>';
   } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "SELECT * FROM tblresident WHERE id = $id"; // Assuming you want to fetch data based on an ID
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
      // Step 3: Fetch the data from the result set
      $row = $result->fetch_assoc();

      // Step 4: Use the fetched data to populate the form fields
      $housetype = $row["housetype"];
      $housenum = $row["housenum"];
      $famnum = $row["famnum"];
      $residenttype = $row["residenttype"];
      $gender = $row["gender"];
      $lname = $row["lname"];
      $ename = $row["ename"];
      $fname = $row["fname"];
      $mname = $row["mname"];
      $phone = $row["phone"];
      $year = $row["year"];
      $bday = $row["bday"];
      $brn = $row["brn"];
      $brd = $row["brd"];
      $weight = $row["weight"];
      $height = $row["height"];
      $nationality = $row["nationality"];
      $bplace = $row["bplace"];
      $marital = $row["marital"];
      $soloparent = $row["soloparent"];
      $permadd = $row["permadd"];
      $Hnum = $row["Hnum"];
      $street = $row["street"];
      $Brgy = $row["Brgy"];
      $municipality = $row["municipality"];
      $province = $row["province"];
      $osy = $row["osy"];
      $voter = $row["voter"];
      $ofw = $row["ofw"];
      $country = $row["country"];
      $job = $row["job"];
      $skill = $row["skill"];
      $idnum = $row["idnum"];
      $tin = $row["tin"];
      $pwd = $row["pwd"];
     
      // Repeat for other form fields
   } else {
      echo "0 results";
   }


    $conn->close();
}
?>




<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../css/registration.css">

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
                  <a href="./profile.php" class="sidebar__link active-link">
                     <i class="ri-user-line"></i>
                     <span class="sidebar__link-name">Profile</span>
                     <span class="sidebar__link-floating">Profile</span>
                  </a>

                  <a href="./manageacc.php" class="sidebar__link">
                     <i class="ri-registered-line"></i>
                     <span class="sidebar__link-name">Manage Account</span>
                     <span class="sidebar__link-floating">Manage Account</span>
                  </a>
                  <a href="./request.php" class="sidebar__link">
                     <i class="ri-file-edit-line"></i>
                     <span class="sidebar__link-name">Request</span>
                     <span class="sidebar__link-floating">Request</span>
                  </a>

                  <a href="./complaint.php" class="sidebar__link">
                     <i class="ri-archive-fill"></i>
                     <span class="sidebar__link-name">Complaint Box</span>
                     <span class="sidebar__link-floating">Complaint Box</span>
                  </a>
               </div>

              
               <div class="sidebar__list">
                  <a href="./aboutus/AboutUs.html" class="sidebar__link">
                     <i class="ri-information-fill"></i>
                     <span class="sidebar__link-name">About Us</span>
                     <span class="sidebar__link-floating">About Us</span>
                  </a>


                  <a href="./index.html" class="sidebar__link">
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
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
         <h2>Personal Information
         </h2>
         <hr style="
         border: 2px solid #246dec;
         margin: 2px -1px;
         ">
         <label for="housetype"> Residential House Type </label>
         <input type="radio" name="housetype" value="Owner"  <?php if(isset($housetype) && $housetype == "Owner") echo "checked"; ?> required> Owner
         <input type="radio" name="housetype" value="Sharer"  <?php if(isset($housetype) && $housetype == "Sharer") echo "checked"; ?> required> Sharer
         <input type="radio" name="housetype" value="Renter"  <?php if(isset($housetype) && $housetype == "Renter") echo "checked"; ?>required> Renter 

         <br>

         <label for="housenum">Household Number</label>
         <input type="text" id="Household_num" name="housenum"  placeholder="HN831BP21996" value="<?php echo $housenum; ?>" required>

         <label for="famnum">Family Number</label>
         <input type="text" id="fam_num" name="famnum"  placeholder="fam831BP21996" value="<?php echo $famnum; ?>"required>
         <br>
         <label for="residenttype"> Resident Type</label>
         <input type="checkbox" name="residenttype" value="primary"  <?php if(isset($residenttype) && $residenttype == "primary") echo "checked"; ?>> <h5>PRIMARY</h5>

         <label for="gender">Gender</label>
         <select name="gender" required>
         <option> -Select- </option>
         <option value="male" <?php if(isset($gender) && $gender == "male") echo "selected"; ?>>Male</option>
         <option value="female" <?php if(isset($gender) && $gender == "female") echo "selected"; ?>>Female</option>
         </select><br>

         <label for="lname">Last Name</label>
         <input type="text" id="lname" name="lname"  placeholder="Last Name" value="<?php echo $lname; ?>" required>
         <label for="ename">Ext.(Jr/Sr) </label>
         <input type="text" id="ename" name="ename"  placeholder="(Jr/Sr)" value="<?php echo $ename; ?>" ><br>


         <label for="fname">First Name</label>
         <input type="text" id="fname" name="fname"  placeholder="First Name" value="<?php echo $fname; ?>" required>
         <label for="mname">Middle Name</label>
         <input type="text" id="mname" name="mname"  placeholder="Middle Name" value="<?php echo $mname; ?>" ><br>


         <label for="contact">Contact Number</label>
         <input type="number" id="contact" name="phone"  placeholder="Enter your phone number" value="<?php echo $phone; ?>" required>

         <label for="year">Years of Residency </label>
         <input type="number" id="year" name="year"  placeholder="Enter your Years of Residency" value="<?php echo $year; ?>" required>
         <br>


         <div class="drop-zone">
            <span class="drop-zone__prompt">Drop file here or click to upload</span>
            <input type="file" name="myFile" class="drop-zone__input" accept=".jpg, .jpeg, .png" value="<?php echo isset($myFile) ? htmlspecialchars($myFile) : ''; ?>" required>
         </div> 




         <hr style="
         border: 2px solid #246dec;
         margin: 2px -1px;
         ">

         <label for="dob">Date of Birth</label>
         <input type="date" id="dob" name="bday" value="<?php echo $bday; ?>" required>

         <label for="brn">Birth Registration Number</label>
         <input type="text" id="brn" name="brn" placeholder="HN831BP21996" value="<?php echo $brn; ?>" required>

         <label for="brd">Birth Registration Date</label>
         <input type="date" id="brd" name="brd" value="<?php echo $brd; ?>" required><br>

         <label for="weight">Weight(kg)</label>
         <input type="number" id="weight" name="weight" placeholder=" kg" value="<?php echo $weight; ?>" required>

         <label for="height">Height(ft)</label>
         <input type="number" id="height" name="height" placeholder="ft" value="<?php echo $height; ?>" required>

         <label for="nationality">Nationality</label>
         <input type="text" id="citizen" name="nationality" placeholder="ex. Filipino" value="<?php echo $nationality; ?>" required><br>

         <label for="bplace">Birth Place</label>
         <input type="text" id="bplace" name="bplace" placeholder="Municipality" value="<?php echo $bplace; ?>" required>

         <label for="status">Marital Status</label>
         <select name="marital" required>
            <option>-select-</option>
         <option value="single " <?php if(isset($marital) && $marital == "single") echo "selected"; ?>>Single</option>
         <option value="married" <?php if(isset($marital) && $marital == "married") echo "selected"; ?>>Married</option>
         <option value="separated" <?php if(isset($marital) && $marital == "separated") echo "selected"; ?>>Legally Separated</option>
         <option value="widowed" <?php if(isset($marital) && $marital == "widowed") echo "selected"; ?>>>Widowed</option>
         </select>

         <label for="soloparent"> Solo Parent </label>
         <input type="radio" name="soloparent" value="yes"<?php if(isset($soloparent) && $soloparent == "yes") echo "checked"; ?> required> Yes
         <input type="radio" name="soloparent" value="no"<?php if(isset($soloparent) && $soloparent == "no") echo "checked"; ?> required > No


         <hr style="
         border: 2px solid #246dec;
         margin: 2px -1px;
         ">

         <h2>Physical Address</h2>
         <hr style="
         border: 2px solid #246dec;
         margin: 2px -1px;
         ">
         <label for="permadd"> Is present address is same as permanent address?</label>
         <input type="radio" name="permadd" value="yes" value="yes"<?php if(isset($permadd) && $permadd == "yes") echo "checked"; ?> required> Yes
         <input type="radio" name="permadd" value="no" value="no"<?php if(isset($permadd) && $permadd == "no") echo "checked"; ?> required> No
         <br>

         <label for="presentadd"> Present Address</label>
         <input type="text" id="presentadd" name="Hnum" placeholder="House Number" value="<?php echo $Hnum; ?>" required>
         <input type="text" id="presentadd" name="street" placeholder=" Street " value="<?php echo $street; ?>" required>
         <input type="text" id="presentadd" name="Brgy" placeholder=" Barangay" value="<?php echo $Brgy; ?>" required>
         <input type="text" id="presentadd" name="municipality" placeholder="Municipality" value="<?php echo $municipality; ?>" required>
         <input type="text" id="presentadd" name="province" placeholder="Province" value="<?php echo $province; ?>" required><br>



         <hr style="
         border: 2px solid #246dec;
         margin: 2px -1px;
         ">

         <h2>Personal Background</h2>

         <hr style="
         border: 2px solid #246dec;
         margin: 2px -1px;
         ">

         <label for="osy"> Out of School Youth </label>
         <input type="radio" name="osy" value="Yes"<?php if(isset($osy) && $osy == "yes") echo "checked"; ?> required> Yes
         <input type="radio" name="osy" value="No"<?php if(isset($osy) && $osy == "no") echo "checked"; ?> required> No 

         <label for="voter"> Registered Voter </label>
         <input type="radio" name="voter" value="yes"<?php if(isset($voter) && $voter == "yes") echo "checked"; ?> required> Yes 
         <input type="radio" name="voter" value="no"<?php if(isset($voter) && $voter == "no") echo "checked"; ?> required> No <br>
         <br>

         <label >OFW</label>
         <select id="ofw" name="ofw" >
            <option>-select-</option>
         <option value="yes" <?php if(isset($ofw) && $ofw == "yes") echo "selected"; ?>>Yes</option>
         <option value="no" <?php if(isset($ofw) && $ofw == "no") echo "selected"; ?>>No</option>
         </select>


         <label >Country</label>
         <select id="country" name="country"    > 
            
            <option>Select Country</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Åland Islands">Åland Islands</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antarctica">Antarctica</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Bouvet Island">Bouvet Island</option>
            <option value="Brazil">Brazil</option>
            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option value="Brunei Darussalam">Brunei Darussalam</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Cape Verde">Cape Verde</option>
            <option value="Cayman Islands">Cayman Islands</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Christmas Island">Christmas Island</option>
            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo">Congo</option>
            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
            <option value="Cook Islands">Cook Islands</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Cote D'ivoire">Cote D'ivoire</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
            <option value="Faroe Islands">Faroe Islands</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="French Guiana">French Guiana</option>
            <option value="French Polynesia">French Polynesia</option>
            <option value="French Southern Territories">French Southern Territories</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Greece">Greece</option>
            <option value="Greenland">Greenland</option>
            <option value="Grenada">Grenada</option>
            <option value="Guadeloupe">Guadeloupe</option>
            <option value="Guam">Guam</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guernsey">Guernsey</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea-bissau">Guinea-bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Isle of Man">Isle of Man</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jersey">Jersey</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
            <option value="Korea, Republic of">Korea, Republic of</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Macao">Macao</option>
            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malawi">Malawi</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Maldives">Maldives</option>
            <option value="Mali">Mali</option>
            <option value="Malta">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option>
            <option value="Martinique">Martinique</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mayotte">Mayotte</option>
            <option value="Mexico">Mexico</option>
            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
            <option value="Moldova, Republic of">Moldova, Republic of</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montenegro">Montenegro</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="Netherlands Antilles">Netherlands Antilles</option>
            <option value="New Caledonia">New Caledonia</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niue">Niue</option>
            <option value="Norfolk Island">Norfolk Island</option>
            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau">Palau</option>
            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Pitcairn">Pitcairn</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Qatar">Qatar</option>
            <option value="Reunion">Reunion</option>
            <option value="Romania">Romania</option>
            <option value="Russian Federation">Russian Federation</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saint Helena">Saint Helena</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="Saint Lucia">Saint Lucia</option>
            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Serbia">Serbia</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="Swaziland">Swaziland</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
            <option value="Taiwan">Taiwan</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
            <option value="Thailand">Thailand</option>
            <option value="Timor-leste">Timor-leste</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Viet Nam">Viet Nam</option>
            <option value="Virgin Islands, British">Virgin Islands, British</option>
            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
            <option value="Wallis and Futuna">Wallis and Futuna</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
         </select>

         <br>


         <label for="job">Occupation</label>
         <input type="text" id="job" name="job" placeholder="Occupation" value="<?php echo $job; ?>" required>

         <label for="skill">Skills</label>
         <input type="text" id="skill" name="skill" placeholder="Skill" value="<?php echo $skill; ?>" required><br>

         <label for="idnum">SSS/UMID Number</label>
         <input type="text" id="idnum" name="idnum" placeholder="SSS/UMID" value="<?php echo $idnum; ?>" required>
         <label for="tin">TIN Number</label>
         <input type="text" id="tin" name="tin" placeholder="TIN Number" value="<?php echo $tin; ?>" required><br>

         <label for="pwd">Person With Disability</label> <br>
         <div class="container">
            <div class="column-pwd">
               <div class="checkbox-wrapper">
                     <input type="checkbox" name="pwd[]" value="Psychosocial Disability" <?php if(in_array("Psychosocial Disability", $pwd)) echo "checked"; ?>>
                     <label for="Psychosocial Disability">Psychosocial Disability</label>
               </div>
               <div class="checkbox-wrapper">
                     <input type="checkbox" name="pwd[]" value="Mental Disability" <?php if(in_array("Mental Disability", $pwd)) echo "checked"; ?>>
                     <label for="Mental Disability">Mental Disability</label>
               </div>
               <div class="checkbox-wrapper">
                     <input type="checkbox" name="pwd[]" value="Hearing Disability" <?php if(in_array("Hearing Disability", $pwd)) echo "checked"; ?>>
                     <label for="Hearing Disability">Hearing Disability</label>
               </div>
            </div>
            <div class="column-pwd">
               <div class="checkbox-wrapper">
                     <input type="checkbox" name="pwd[]" value="Chronic Illness" <?php if(in_array("Chronic Illness", $pwd)) echo "checked"; ?>>
                     <label for="Chronic Illness">Chronic Illness</label>
               </div>
               <div class="checkbox-wrapper">
                     <input type="checkbox" name="pwd[]" value="Visual Disability" <?php if(in_array("Visual Disability", $pwd)) echo "checked"; ?>>
                     <label for="Visual Disability">Visual Disability</label>
               </div>
               <div class="checkbox-wrapper">
                     <input type="checkbox" name="pwd[]" value="Speech Impairment" <?php if(in_array("Speech Impairment", $pwd)) echo "checked"; ?>>
                     <label for="Speech Impairment">Speech Impairment</label>
               </div>
            </div>
            <div class="column-pwd">
               <div class="checkbox-wrapper">
                     <input type="checkbox" name="pwd[]" value="Learning Ability" <?php if(in_array("Learning Ability", $pwd)) echo "checked"; ?>>
                     <label for="Learning Ability">Learning Ability</label>
               </div>
               <div class="checkbox-wrapper">
                     <input type="checkbox" name="pwd[]" value="Orthopedic Disability" <?php if(in_array("Orthopedic Disability", $pwd)) echo "checked"; ?>>
                     <label for="Orthopedic Disability">Orthopedic Disability</label>
               </div>
               <div class="checkbox-wrapper">
                     <input type="checkbox" name="pwd[]" value="Others" <?php if(in_array("Others", $pwd)) echo "checked"; ?>>
                     <label for="Others">Others</label>
               </div>
            </div>
         </div>

         <div class="button-container">
            <input type="submit" value="Submit">
            <button><a href="changepass.php">Change Password</a></button>
         </div>

         </form>
               

      </main>

      <footer>
         Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
      </footer>   
   </div>   
      <!--=============== MAIN JS ===============-->
      <script src="../js/sidebar.js"></script>'
<script src="../js/uploadpic.js"></script>  
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const changePasswordCheckbox = document.getElementById('changePasswordCheckbox');
        const changePasswordForm = document.getElementById('changePasswordForm');

        // Add event listener to checkbox
        changePasswordCheckbox.addEventListener('change', function () {
            if (changePasswordCheckbox.checked) {
                // Show change password form
                changePasswordForm.style.display = 'block';
            } else {
                // Hide change password form
                changePasswordForm.style.display = 'none';
            }
        });
    });
</script>
 </body>
</html>