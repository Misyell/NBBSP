<!DOCTYPE html>
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
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
	<link type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />

	<style>
		tr{
			padding: 10px;
			text-align: center;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
	
	
</head>
<body>
	<div class="table">
		<table id="example" class="display nowrap" style="width:100%">
			<thead>
				<tr>
					<th>Last Name</th>
					<th>Fisrt Name</th>
					<th>Address</th>
					<th>Birthday</th>
					<th>Occupation</th>
					<th>Residential House Type</th>
					<th>Year/s of Residency</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<?php
                        $sql = "SELECT lname, fname, Hnum, street, Brgy, municipality, province, dob, job, housetype, year FROM tblresident";
                        $result= mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
						$address = $row['Hnum']. ','.  $row['street']. ','. $row['Brgy']. ','. $row['municipality']. ','. $row['province'];

				
                    if ($result-> num_rows > 0){
                        while ($row = $result->fetch_assoc()){
                            echo "<tr><td>" . $row["lname"]. "</td><td>". $row["fname"]. "</td><td>". $address. "</td><td>" . $row["dob"]. "</td><td>". $row["job"] ."</td><td>". $row["housetype"]. "</td><td>" . $row["year"]."</td></tr>";
                        }
                    } else{
                        echo "No data";
                    }

                ?>

		</table>
	</table>
</div>

	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>	
	<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js
"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js
"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
	<script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>

	<script>
	new DataTable('#example', {

		scrollX: true,
		responsive: true,
		dom: 'Bfrtip',
      buttons: [
			{
				extend: 'copy', titleAttr: "Copy"
			}, 
			{
				extend:'excel',  titleAttr: "Export to Excel", title : "Inhabitant List"
			}, 
			{
				extend:'pdf', titleAttr: "Export to PDF", title : "Inhabitant List"
			},
			{
				extend: 'print', titleAttr: "Print", title : "Inhabitant List",  
				customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend(
                            '<img src="../../../img/header.png" style="position:relatve; top:0; left:0; width:100%; " />'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }
			}
      ],
	  columnDefs:[{
		targets:0,
		checkboxes:{
			selectRow:true
		}
	  }],
	
	  
	 
	  });
	  </script>
	
	<?php
	$conn->close();
	?>
	
	
</body>
</html>
