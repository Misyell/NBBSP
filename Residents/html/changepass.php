
<?php
session_start();

include 'dbcon.php';

if(isset($_POST['submit'])) {
    // Retrieve user ID from session
    $id = $_SESSION['id'];

    // Sanitize input data
    $op = mysqli_real_escape_string($con, $_POST['op']);
    $np = mysqli_real_escape_string($con, $_POST['np']);
    $c_np = mysqli_real_escape_string($con, $_POST['c_np']);

    // Check if all fields are filled
    if(empty($op) || empty($np) || empty($c_np)) {
        $message = 'All fields are required!';
    } else {
        // Retrieve current password from the database
        $select_old_pass = $conn->prepare("SELECT password FROM userusers WHERE id = ?");
        $select_old_pass->bind_param("i", $id);
        $select_old_pass->execute();
        $result = $select_old_pass->get_result();
        $row = $result->fetch_assoc();
        $prev_pass = $row['password'];

        // Check if the old password matches the one in the database
        if (md5($op) !== $prev_pass) {
            $message = 'Old password not matched!';
        } elseif ($np !== $c_np) {
            $message = 'New passwords do not match!';
        } else {
            // Hash the new password
            $hashed_password = md5($np); // You should use a stronger hashing algorithm
            // Update the password in the database
            $update_pass = $conn->prepare("UPDATE userusers SET password = ? WHERE id = ?");
            $update_pass->bind_param("si", $hashed_password, $id);
            $update_pass->execute();
            $update_pass->close();
            $message = 'Password updated successfully!';
        }
    }
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
      <link rel="stylesheet" href="../css/changepass.css">

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

      <div class="title"> 
            <h1>Edit Profile</h1></div>
            
                 
                 <hr style="
                        border: 1px solid #171922;
                        margin: 15px -1px -65px;">

                 <!-- edit form column -->

                   <br>
                   <br>
                   <br>
                   <br>

                   <h2 style="color: rgb(119, 134, 172); margin: 5px 10px 30px;">CHANGE PASSWORD</h2>
                   <?php if(isset($message)) echo $message; ?>

                   <form class="form-horizontal" role="form" method="post" style="text-align:left;">

                     <p style="color: #171922; margin-left: 10px;"> Please enter below the required informations: </p> <br>
                     <label for="username" style="color: #171922; margin-left: 10px;">Old Password:</label>
                     <input type="password" id="uname" name="op" placeholder="Old Password" style="margin-left: 13px;height: 30px;border-radius: 10px;">                     
                     <br><br>
                     <label for="Password" style="color: #171922; margin-left: 10px;">New Password:
                     </label>
                     <input type="password" id="pw" name="np" placeholder="New Password" style="margin-left: 13px;height: 30px;border-radius: 10px;">
                     <br><br>
                     <label for="NewPassword" style="color: #171922; margin-left: 10px;">Confirm New Password: </label>
                     <input type="password" id="pw" name="c_np" placeholder="Confirm New Password" style="margin-left: 13px;height: 30px;border-radius: 10px;"><br>
                     <input type="submit" value="Change Password" style="color: white;margin-left: 88px;margin-top: 32px;height: 36px;border-radius: 10px;width: 134px;background: #246DEC;">                     <br><br>

                   </form>
                 </div>
             </div>
           <hr>
         
      

      </main>

      <footer>
         Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
      </footer>   
   </div>   
      <!--=============== MAIN JS ===============-->
      <script src="../js/sidebar.js"></script>
   </body>
</html>