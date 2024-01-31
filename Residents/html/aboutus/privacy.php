<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Privacy Policy</title>
        <link rel="stylesheet" href="../../style/privacy.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <title>Privacy</title>
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
        <h1>Privacy Policy</h1></div>

        <div id="privacy" class="privacy">
         
            <p>The Barangay North Bay Boulevard South Proper (BNBBSP) Barangay Management Information System
                 places a high priority on maintaining the privacy of all partners and users. In accordance with
                  Republic Act 10173, often known as the "Data Privacy Act of 2012," the BNBBS is committed to 
                  safeguarding the security and privacy of every piece of personal information stored within the system. 
                  The procedure and practices relating to the gathering, use, and disclosure of each and every piece of 
                  personal information inside the aforesaid system are described in this Privacy and Policy Statement. 
            </p>
        </div>
       
        <div id="collect" class="collect">
            <h1 >What Informations does the BNBBSP-BMIS Collect?</h1>
            <hr style="
                        border: 1px solid #fff;
                        margin: 2px -1px;
                        ">
            <p>

                In order to provide a utmost service, the BNBBSP-BMIS may need to collect personal data 
                that may include but is not limited to the following:
                
                - Names, address, email, telephone number, and other contact information.
                - Employment details, such as job description of barangay citizens.
                - Request forms, including Barangay Certificate and Clearance request
                - Health information, such as person with disease and 
                
            </p>
        </div>
        
        <div id="how"  class="how">
            <h1 >How does the BNBBSP-BMIS collects Personal Information?
            </h1>
            <hr style="
                        border: 1px solid #a19f9c;
                        margin: 2px -1px;
                        ">
            <p>
                The information that the system collects from its barangay citizens may be used for:
                
                - Providing and improving the barangay services
                - Communication process on different citizens involve in the barangay community
                - Processing request such as request for barangay certificates and clearances
                - Providing efficient support to the barangay community
                - Enforcing strict and well implemented terms and policies
                - Complying with applicable laws, regulations and other legal obligations
                - Guaranteeing not only the barangay community’s rights, property, and safety, but also its citizens
                
            </p>
        </div>
        
        <div  id="disclosure" class="disclosure">
             <h1 >Disclosure of Any Personal Information</h1>
             <hr style="
                        border: 1px solid #fff;
                        margin: 2px -1px;
                        ">
        <p>

            The BNBBSP-BMIS will only provide any government agencies that may likewise require such personal 
            information with the personal information of any barangay citizens or authorities. Except with the 
            prior approval of the barangay officials, the barangay management system does not divulge any personal
            information to external parties or third parties that are not recognized as government organizations.
            When it's necessary to defend our rights or the safety and security of our staff, users, or its citizens, 
            the BNBBSP-BMIS may be required to divulge information for legal, regulatory, or law enforcement purposes.
            

        </p>
        </div>
       <div id="changes" class="changes">
        <h1 >Changes to this Privacy and Policy Statement</h1>
        <hr style="
                        border: 1px solid #a19f9c;
                        margin: 2px -1px;
                        ">
        <p>

            This Privacy and Policy Statement may occasionally be updated or modified by the BNBBSP-BMIS 
            without previous notification. Any modifications will be announced through the system. 
            To keep everyone who can use the system informed of any potential changes, the system advises 
            routinely reviewing this statement.
            
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