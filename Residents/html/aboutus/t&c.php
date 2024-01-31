<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Term & Condition</title>
        <link rel="stylesheet" href="../../style/term&con.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <title>Terms and Condition</title>
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
        <div class="title"> 
        <h1>TERMS AND CONDITIONS </h1></div>

        <div id="terms" class="terms">
         
            <p>These Terms and Conditions apply to the use of the Barangay North Bay Boulevard South Proper – 
                Barangay Management Information System (BNBBSP-BMIS) uses and services. By accessing or using this system,
                 the user accept and agree to be bound by these Terms and Conditions.. 
            </p>
        </div>
       
        <div id="a" class="a">
            <h1 >  Use of Barangay Management Information System</h1>
            <hr style="
                        border: 1px solid #fff;
                        margin: 2px -1px;
                        ">
            <p>
                The BMIS may only be used in accordance with the relevant rules and regulations and for legitimate purposes. 
                This system must not be utilized in any way that compromises its operation or could harm the system itself. 
                The user of this system must consent to using it solely for authorized reasons.
             
            </p>
        </div>
        
        <div id="b"  class="b">
            <h1 >Intellectual Property Rights 
            </h1>
            <hr style="
                        border: 1px solid #a19f9c;
                        margin: 2px -1px;
                        ">
            <p>
           All content on this system, including text, graphics, logos, images, and software, is 
           the property of Barangay North Bay Boulevard South Proper or its affiliates and is protected
            by applicable copyright and trademark laws. 

                
            </p>
        </div>
        
        <div  id="c" class="c">
             <h1 > Disclosure of Any Personal Information</h1>
             <hr style="
                        border: 1px solid #fff;
                        margin: 2px -1px;
                        ">
        <p>
            
            The Barangay North Bay Boulevard South Proper bears no responsibility for any errors or omissions and 
            disclaims all warranties and guarantees regarding the accuracy and completeness of the content on this 
            website. Consequently, the barangay makes no guarantees that this system is free of malware or other 
            potentially hazardous components. The Barangay NBBSP disclaims all responsibility for damages resulting 
            from or connected with the use of, or inability to use, this system, to the fullest extent permitted by law.
            

        </p>
        </div>
       <div id="d" class="d">
        <h1 >    Privacy</h1>
        <hr style="
                        border: 1px solid #a19f9c;
                        margin: 2px -1px;
                        ">
        <p>
        The Barangay North Bay Boulevard South Proper - Barangay Management Information System is dedicated to 
        safeguarding any personal data contained in the system and respects the privacy of its officials and citizens. 
        The privacy policy statement is accessible to all users of this system and is included in these Terms and
         Conditions.
            <br>
            <br>
        By using this website, you agree to be bound by these Terms and Conditions. 
        If you do not agree to these Terms and Conditions, you must stop using this website 
        and our products/services immediately.
            
            
        </p>
       </div>
        

    </div>

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