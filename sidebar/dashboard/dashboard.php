<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href=".../../../../style/dashboard.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    </head>
    <body>
<?php include "../sidebar/sidebar.php";?>
        <!--wrapper start-->
        <div class="wrapper">
            <!--header menu start-->
			
      <!-- Main -->
	<main class="main-container">
		<div class="main-cards">
		  <a href="../dtotal Population/purok 1.php">
			  <div class="card" >
				  <div class="card-inner">
			  
				  <span class="fas fa-users"></span>
				   <p class="text-primary">TOTAL POPULATION</p>
				  </div>
          <?php
            $dash_card_query = "SELECT * from ";
            $dash_card_query_run = mysql_query($con, $dash_card_query);

            if($card_total = mysql_num_rows($dash_card_query_run))
            {
				    echo  '<span class="text-primary font-weight-bold"> </span>';
            }
            else
            {
              echo  '<span class="text-primary font-weight-bold"> No Data </span>';
            }
          ?>
			  </div>
		  </a>    
		  <a href="../dtotal Household/purok 1H.php">
			  <div class="card">
				  <div class="card-inner">
				  <span class="fas fa-home"></span>
				  <p class="text-primary">TOTAL HOUSEHOLDS</p>
				  
				  </div>
				  <?php
            $dash_card_query = "SELECT * from ";
            $dash_card_query_run = mysql_query($con, $dash_card_query);

            if($card_total = mysql_num_rows($dash_card_query_run))
            {
				    echo  '<span class="text-primary font-weight-bold"> </span>';
            }
            else
            {
              echo  '<span class="text-primary font-weight-bold"> No Data </span>';
            }
          ?>
			  </div>
		  </a>

		  <a href="../dblacklisted/purok 1b.php">    
			  <div class="card">
				  <div class="card-inner">
				  <span class="fas fa-exclamation-triangle"></span>
				  <p class="text-primary">BLACKLIST</p>
				  </div>
          <?php
            $dash_card_query = "SELECT * from ";
            $dash_card_query_run = mysql_query($con, $dash_card_query);

            if($card_total = mysql_num_rows($dash_card_query_run))
            {
				    echo  '<span class="text-primary font-weight-bold">' '</span>';
            }
            else
            {
              echo  '<span class="text-primary font-weight-bold"> No Data </span>';
            }
          ?>
				</div>
		  </a>

        </div>
		<center><div class="mid-title">
			<p class="font-weight-bold">BARANGAY NBBS PROPER OFFICIAL'S ORGANIZATIONAL STRUCTURE   </p>
			</div>   

		</center>
		
				<img src="../../img/org.png" width= "849px" >

	
   
		<!---Chart----><br>
		<center><div class="mid-title">
		<p class="font-weight-bold">LATEST DATA REPORTS   </p>
		</div>    </center>

        <div class="charts">

          <div class="charts-card">
            <p class="chart-title">POPULATION</p>
            <div id="population-chart"></div>
          </div>

          <div class="charts-card">
            <p class="chart-title">HOUSEHOLDS</p>
            <div id="household-chart"></div>
          </div>
          
          <div class="charts-card">
            <p class="chart-title">COVID-19</p>
            <div id="covid-chart-1"></div>
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
    <script src="../../js/dashchart.js"></script>
  </body>
</html>