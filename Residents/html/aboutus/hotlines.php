<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotline</title>
        <link rel="stylesheet" href="../../style/hotlines.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <title>Hotlines</title>
        <meta name="description" content="Description..." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#03a9f4" />
        <meta name="apple-mobile-web-app-status-bar-style" content="default" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@site" />
        <meta name="twitter:url" content="https://your-app.com" />
        <meta name="twitter:title" content="Title" />
        <meta name="twitter:description" content="Description..." />
        <meta name="twitter:image" content="" />

        <!-- Open Graph -->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Title" />
        <meta property="og:description" content="Description..." />
        <meta property="og:site_name" content="My App" />
        <meta property="og:url" content="https://your-app.com" />
        <meta property="og:image" content="" />

        <link rel="manifest" href="/manifest.json" />
        <script async src="https://unpkg.com/pwacompat" crossOrigin="anonymous"></script>

        <!-- Apple touch icon -->
        <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-touch-icon_120.png" />
    </head>


        <script>
            if ("serviceWorker" in navigator) {
                window.addEventListener("load", function () {
                    navigator.serviceWorker
                        .register("/serviceWorker.js")
                        .then((registration) => {
                            console.log("SW registration successful");
                        });
                });
            }
        </script>
    <body>

        <!--wrapper start-->
        <div class="wrapper">
            <?php include "../sidebar/sidebar.php";?>

      <!-- Main -->
	  <main class="main-container">
		<nav class="nav-2">
        <ul>
                <li><a href="AboutUs.php">About Us</a></li> 
               <li><a href="committee.php"> Community Member</a></li>
                <li><a href="help&sop.php">Help & Support</a></li>
                <li><a href="t&c.php">Terms & Condition</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="hotlines.php">Hotlines</a></li>
            </ul>
        </nav>
    <div class="content">
        <div class="title-2"> 
        <h2>Contact Us</h2>
        <hr style="
                       border: 1px solid #246dec94;
                       margin: 2px -1px;
                       ">
    </div>

        <div  id="hot" class="hot">
            <div class="picture">

                <img src="../../img/logo.jpg" alt="">
            </div>
    
       <span>
           
       Barangay Hotline: (8)286-93-50
       <br>
       <br>
       Barangay P.I.O Hotline: 0967-247-6939
       <br>
       <br>
       Barangay Captain: "Kap Boy" Desabille <br>
       Contact: <br>
       Globe: 0966-698-8945 <br>
       Smart: 0960-430-6830 <br>
       <br>
       Barangay Ambulance: 0912-5303-102
       <br><br>
       NBBS Proper Fire and <br>
       rescue Volunteer: 0963-1608-002

    
       Facebook Page: BARANGAY NBBS Proper
       <br>
       Police Station Navotas: 8281-90-99/ 8281-91-10
       <br>
       BFP Navotas: 8286-08-54
<br>



    </span>

      
         
        

     </div>

      </main>
      <!-- End Main -->
      <footer>
        Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
</footer>

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
  </body>
</html>