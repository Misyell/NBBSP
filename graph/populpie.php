
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Street Population Pie Graph</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<?php
// Replace these with your actual MySQL database credentials
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

// Fetch data from MySQL
$query = "SELECT street, COUNT(id) AS user_count FROM  tblresident GROUP BY street";
$result = $conn->query($query);

// Check if there are results
if ($result->num_rows > 0) {
    $streetData = [];
    
    // Fetch data into an associative array
    while ($row = $result->fetch_assoc()) {
        $streetData[$row['street']] = $row['user_count'];
    }

    // Convert data to JSON for JavaScript
    $streetDataJSON = json_encode($streetData);

    // Close the MySQL connection
    $conn->close();
} else {
    echo "No data found";
}
?>

<canvas id="streetChart" width="400" height="400"></canvas>

<script>
var streetData = <?php echo $streetDataJSON; ?>;
var ctx = document.getElementById('streetChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: Object.keys(streetData),
        datasets: [{
            data: Object.values(streetData),
            backgroundColor: [
                'rgba(255, 99, 132, 0.7)',
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 206, 86, 0.7)',
                // Add more colors as needed
            ],
        }],
    },
});
</script>

</body>
</html>