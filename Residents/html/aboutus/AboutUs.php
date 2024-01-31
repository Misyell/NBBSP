<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link rel="stylesheet" href="../../style/aboutus.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <title>About Us</title>
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
        <h1>About Us</h1></div>

        <div id="salaysay" class="salaysay">
            <h1 >MAIKLING SALAYSAY</h1>
            <hr style="
                        border: 1px solid #a19f9c;
                        margin: 2px -1px;
                        ">
            <p>Ang NBBS Proper ang orihinal na komunidad na binubuo ng hangganan ng kalyeng North Bay Blvd.
                 At ng mga kabahayan sa kanluran patungo na sa karagatan. Ang total na sukat nito ay nasa 15 
                 ektarya lamang kasama na ang bagong reklamasyong tinatawag ngayong Fishport. <br>
<br>
                Samantala, sa pagkakagawa ng Fishport ay lumawak din ang tinaguriang NBBS Proper, Ang tinatawag
                 na LRT or drainage ng Proper ay napatungan na ng mga kabahayan at nadagdagan pa ng Sitio Sto. Nino
                  at Sitio Puting Bato kasama na ang komersyal na panig ng Fish port na pawang karagatan pa ng bandang
                   1960. Kung babalikan ang panahong yun ay kapansin pansin ang malinis na karagatan, at kapag lumusong 
                   ka ay maraming laman dagat ka nang makukuha na sapat upang ipamuhay ng isang pamilya. <br>
                <br>
                Taong 1995, pinangunahan ng mga old tenants ang pag aayos upang magkaroon na ng titulo ang mga lupang
                kinatitirikan ng kanilang mga bahay. Natigil ang pag poproseso dito at taong 2000, muling naiproseso
                 ang pagpapatitulo. Taong 2002, iginawada at nakapaggawad ng 700 na titulo
            </p>
        </div>
       
        <div id="kalagayan" class="kalagayan">
            <h1 >KALAGAYAN NG PAMAYANAN</h1>
            <hr style="
                        border: 1px solid #fff;
                        margin: 2px -1px;
                        ">
            <p>Ang Barangay NBBS Proper sa ngayon ay isang progresibong pamayanan. Dumami ang mga establisyemento 
                at pagkakatatag ng power barges na nakahimpil mismo sa karagatan sa sakop ng Fishport. Sa pagtatagpo
                 ng R-10, C-3 at pagkakadevelop ng C-4, ang pagpunta sa Fishport ay napadali na at bumilis ang kalakalan 
                 Marami ang nabigyan ng hanapbuhay maging ang karatig na mga barangay ng NBBS Proper. <br>
                 <br>

                May mga informal settler din sa loob ng komunidad na matatagpuan sa Sitio Sto. Nino at Sitio Puting Bato.
                 Sa kasalukuyan ang kanilang lugar ay kinakailangang ng pamahalaan para sa pagpapa-unlad, sila ay mabibiyayaan ng 
                 programang pabahay ng pamahalaan sa Norzagaray. 
                
            </p>
        </div>
        
        <div id="bisyon"  class="bisyon">
            <h1 >BISYON</h1>
            <hr style="
                        border: 1px solid #a19f9c;
                        margin: 2px -1px;
                        ">
            <p>Isang sentro ng idustriyalisasyon sa Lungsod ng Navotas, huwaran, ligtas, masagana at makakalikasan na pamayanan,
                 na pinaninirahan ng disiplinado, may mataas na edukasyon at may takot sa Diyos na mamamayan na pinamumunuan mg 
                 mga tapat at maaasahan na nanunungkulan.
            </p>
        </div>
        
        <div  id="misyon" class="misyon">
             <h1 >MISYON</h1>
             <hr style="
                        border: 1px solid #fff;
                        margin: 2px -1px;
                        ">
        <p>Tapat at nagkakaisang maglilingkod na may kakayahan sa pagpapa-unlad ng imprastruktura, ekonomiya, 
            kapaligiran at mga programang magsusunog at magbibigay kabuhayan para maiangat ang antas ng pamumuhay
             ng bawat pamilya at mapaunlad ang lahat ng sector sa Barangay
        </p>
        </div>
       <div id="core" class="core">
        <h1 >CORE VALUES</h1>
        <hr style="
                        border: 1px solid #a19f9c;
                        margin: 2px -1px;
                        ">
        <p>MASAYA, MASAGANA AT MAPAGMAHAL
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
    <script src="chart.js"></script>
  </body>
</html>