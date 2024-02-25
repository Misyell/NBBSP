

<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../css/side&navtemp.css">

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

      <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }
  .container-1 {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  .title {
    text-align: center;
    color: #333;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }
  th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
  }
  th {
    background-color: #f2f2f2;
  }
  .status-form {
    display: inline-block;
  }
</style>
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
      <div class="container-1">
  <h1 class="title">Barangay Transaction History</h1>
  <table>
    <thead>
      <tr>
        <th>Date</th>
        <th>Resident Name</th>
        <th>Purpose</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2024-02-15</td>
        <td>Juan dela Cruz</td>
        <td>Certificate of Residency</td>
        <td>Approved</td>
      </tr>
      <tr>
        <td>2024-02-10</td>
        <td>Maria Santos</td>
        <td>Clearance for Employment</td>
        <td>Denied</td>
      </tr>
      <tr>
        <td>2024-02-05</td>
        <td>Pedro Hernandez</td>
        <td>Barangay Clearance</td>
        <td>Approved</td>
      </tr>
      <!-- Add more transactions as needed -->
    </tbody>
  </table>
</div>
 
      </main>

      <footer>
         Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
      </footer>   
   </div>   
      <!--=============== MAIN JS ===============-->

      <script src="../js/sidebar.js"></script>
   </body>
</html>
