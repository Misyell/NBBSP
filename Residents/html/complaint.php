<!-- table name- 	complaint -->
<?php
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

   // Prepare and bind parameters
   $stmt = $conn->prepare("INSERT INTO complaint (report_type, case_id, num_of_cases, complainant, complainant_address, dependants, defendant_address, issue_problem, date_filed, status, document_picture, lupon_statement, agreement) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
   $stmt->bind_param("ssissssssssss", $report_type, $case_id, $num_of_cases, $complainant, $cadd, $dependants, $dadd, $issue, $date, $status, $document_picture, $lupon_statement, $agreement);

   // Set parameters
   $report_type = $_POST['reporttype'];
   $case_id = $_POST['caseid'];
   $num_of_cases = $_POST['numofcases'];
   $complainant = $_POST['complainant'];
   $cadd = $_POST['cadd'];
   $dependants = $_POST['dependants'];
   $dadd = $_POST['dadd'];
   $issue = $_POST['issue'];
   $date = $_POST['date'];
   $status = $_POST['status'];

   // Set file upload parameters
   $document_picture = isset($_FILES['Picture']['name']) ? $_FILES['Picture']['name'] : '';
   $lupon_statement = isset($_FILES['statement']['name']) ? $_FILES['statement']['name'] : '';
   $agreement = isset($_FILES['agreement']['name']) ? $_FILES['agreement']['name'] : '';

   // Move uploaded files to a permanent location
   if (!empty($_FILES['Picture']['tmp_name'])) {
       move_uploaded_file($_FILES['Picture']['tmp_name'], "uploads/" . $document_picture);
   }
   if (!empty($_FILES['statement']['tmp_name'])) {
       move_uploaded_file($_FILES['statement']['tmp_name'], "uploads/" . $lupon_statement);
   }
   if (!empty($_FILES['agreement']['tmp_name'])) {
       move_uploaded_file($_FILES['agreement']['tmp_name'], "uploads/" . $agreement);
   }

   // Execute the query
   if ($stmt->execute()) {
       echo '<script>alert("New record created successfully");</script>';

       
   } else {
       echo "Error: " . $stmt->error;
   }

   // Close statement and connection
   $stmt->close();
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
      <link rel="stylesheet" href="../css/complaint.css">

      <title>Complaint Box</title>
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
         
         <form id="complaint.html" method="POST" >
            <h2>Cases
            </h2>
            <hr style="
            border: 2px solid #246dec;
            margin: 2px -1px;
            ">
         
            
            

           
            <label for="reporttype"> Report Type</label>
            <input type="radio" name="reporttype" value="blotter" required> Blotter
            <input type="radio" name="reporttype" value="complain" required> Complain 
            <input type="radio" name="reporttype" value="VAWC" required> VAWC
            <input type="radio" name="reporttype" value="Lupon" required> Lupon <br>
            
            <label for="casesnum">Cases Number</label>
            <input type="text" id="caseid" name="caseid"  placeholder="HN831BP21996" required>

            <label for="numofcases">Number of Cases</label>
            <input type="text" id="numofcases" name="numofcases"  placeholder="Number of Cases" required><br>
            

            <label for="complain">Complainant</label>
            <input type="text" id="complainant" name="complainant"  placeholder="Complainants" required>
            
            <label for="cadd">Complainant's Address</label>
            <input type="text" id="cadd" name="cadd"  placeholder="Complainants Address" required><br>

            <label for="dependants">Dependants</label>
            <input type="text" id="dependants" name="dependants"  placeholder="Dependants" required>
            
            <label for="dadd">Defendant's Address</label>
            <input type="text" id="dadd" name="dadd"  placeholder="Defendants Address" required><br>
            
            <label for="issue">Issue/Problem</label>
            <input type="text" id="issue" name="issue"  placeholder="Issue/Problem" required>

            <label for="date">Date Filed</label>
            <input type="date" id="date" name="date"  placeholder="Date Filed" required><br>
          
            <label for="status"> Status</label>
            <input type="radio" name="status" value="Ongoing" required> Ongoing
            <input type="radio" name="status" value="Resolved" required> Resolved 
            <input type="radio" name="status" value="investigating" required> Investigating
            <input type="radio" name="status" value="Closed" required> Closed 
            <br>
            <div class="file-upload">
                <Label for="myfile" required>Document Picture </Label>
                <input class="file-upload__input" type="file" name="Picture[]" id="Picture" multiple required>
                <button class="file-upload__button" type="button">Choose File(s)</button>
                <span class="file-upload__label"></span>
            </div><br>
            <div class="file-upload">
                <Label for="myfile" required>Lupon Statement </Label>
                <input class="file-upload__input" type="file" name="statement" id="Picture" multiple >
                <button class="file-upload__button" type="button">Choose File(s)</button>
                <span class="file-upload__label"></span>
            </div><br>
            <div class="file-upload">
                <Label for="myfile" required>Agreement </Label>
                <input class="file-upload__input" type="file" name="agreement" id="Picture" multiple >
                <button class="file-upload__button" type="button">Choose File(s)</button>
                <span class="file-upload__label"></span>
            </div><br>


     
            
            <div class="button-container">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
              </div>
            
        </form>

      </main>

      <footer>
         Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
      </footer>   
   </div>   
      <!--=============== MAIN JS ===============-->
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
      <script src="../js/sidebar.js"></script>
   </body>
</html>