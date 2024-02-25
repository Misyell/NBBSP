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
<!DOCTYPE html>
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
					<th></th>
				    <th>Case Number </th>
					<th>Name of Minors</th>
					<th>Place of <br>Apprehension </th>
					<th>Time of <br> Apprehension</th>
					<th>Date of <br> Apprehension</th>
					<th>Status</th>
					<th>Action</th>

					<?php
						$sql = "SELECT * FROM tblcurfew";
						$result= mysqli_query($conn, $sql);
						$row = mysqli_fetch_array($result);


					if ($result-> num_rows > 0){
						while ($row = $result->fetch_assoc()){
							echo "<tr><td>" . $row["id"]. "</td><td>". $row["name"]. "</td><td>". $row["place"]. "</td><td>" . $row["time"]. "</td><td>". $row["place"] ."</td><td>". $row["status"]. "</td><td>" . $row["action"]. "</td></tr>";
						}
					} else{
						echo "No data";
					}

				?>
			</thead>
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
		scrollY: true,
		responsive: true,
		dom: 'Bfrtip',
      buttons:[
			{
				extend: 'copy', titleAttr: "Copy"
			}, 
			{
				extend:'excel',  titleAttr: "Export to Excel", title : "Curfew Logs "
			}, 
			{
				extend:'pdf', titleAttr: "Export to PDF", title : "Curfew Logs"
			},
			{
				extend: 'print', titleAttr: "Print", title : "Curfew Logs",  
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