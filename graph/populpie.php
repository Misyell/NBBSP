<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_barangay";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//street and name
$street= "Sitio puting bato";
$street= "Sitio sto.niño";
$street3= "Santiago compound";
$street3= "Lambatan";
$street3= "Fiahport";
$street3= "Lapu lapu extension";
$street3= "Ilang ilang";
$street3= "Carnation";
$street3= "Everlasting";
$street3= "Daisy";
$street3= "Anturium";
$street3= "Champaca";
$street3= "Samapaguita";
$street3= "Yellowbelly";
$street3= "Catleya";
$street3= "Nederland";
$street3= "Buklod diwa";
$street3= "Sapipa";
$street3= "Road10";
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['PUROK 1',     11],
          ['PUROK 2',      2],
          ['PUROK 3',  2],
          ['PUROK 4', 2],
          ['PUROK 5',    7]
        ]);

        var options = {
          title: 'POPULATION'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 500px; height: 300px;"></div>
  </body>
</html>
