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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

	<style>
		tr.group,
		tr.group:hover {
    		background-color: #ddd !important;
		}
        a {
    text-decoration: none;
    color: black;
}
tr{
			padding: 10px;
			text-align: center;
		}
	</style>
	
</head>
<body>
	<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Case Number</th>
                <th>Report Type</th>
                <th>Complinant(s)</th>
                <th>Complinant's Address</th>
                <th>Defendat(s) </th>
                <th>Defendant's Address</th>
                <th>Issue/Problem</th>
                <th>Date</th>
                <th>Document Picture</th>
                <th>Agreement</th>
                <th>Status</th>
             	<th>Action</th> 
                <th>Recorded By</th>
            </tr>
            <?php
                        $sql = "SELECT id, reporttype, complainant, caddress, personToComplain, paddress, complaint, date, myFiles, agreement, sStatus, actionTaken, recordedby FROM tblcurfew";
                        $result= mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);

                    if ($result-> num_rows > 0){
                        while ($row = $result->fetch_assoc()){
                            echo "<tr><td>" . $row["id"]. "</td><td>". $row["reporttype"]. "</td><td>". $row["complainant"]. "</td><td>" . $row["caddress"]. "</td><td>". $row["personToComplain"] ."</td><td>". $row["paddress"]. "</td><td>" . $row["complaint"]. "</td><td>" . $row["date"]. "</td><td>" . $row["myFiles"]. "</td><td>" . $row["agreement"]. "</td><td>" . $row["sStatus"]. "</td><td>" . $row["actionTaken"]. "</td><td>" . $row["recordedby"]. "</td></tr>";
                        }
                    } else{
                        echo "No data";
                    }

                ?>

        </thead>
 
    </table>
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="  https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
        
	<script>
		
		var groupColumn = 2;
var table = $('#example').DataTable({
	scrollX: true,
		responsive: true,
    dom: 'Bfrtip',
        buttons:  [
			{
				extend: 'copy', titleAttr: "Copy"
			}, 
			{
				extend:'excel',  titleAttr: "Export to Excel", title : "Barangay Report"
			}, 
			{
				extend:'pdf', titleAttr: "Export to PDF", title : "Barangay Report"
			},
			{
				extend: 'print', titleAttr: "Print", title : "Barangay Report",  
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
		
    columnDefs: [{ visible: false, targets: groupColumn }],
    order: [[groupColumn, 'asc']],
    displayLength: 25,
    drawCallback: function (settings) {
        var api = this.api();
        var rows = api.rows({ page: 'current' }).nodes();
        var last = null;
 
        api.column(groupColumn, { page: 'current' })
            .data()
            .each(function (group, i) {
                if (last !== group) {
                    $(rows)
                        .eq(i)
                        .before(
                            '<tr class="group"><td colspan="5">' +
                                group +
                                '</td></tr>'
                        );
 
                    last = group;
                }
            });
    }

});
 
// Order by the grouping 
$('#example tbody').on('click', 'tr.group', function () {
    var currentOrder = table.order()[0];
    if (currentOrder[0] === groupColumn && currentOrder[1] === 'asc') {
        table.order([groupColumn, 'desc']).draw();
    }
    else {
        table.order([groupColumn, 'asc']).draw();
    }
});


	
	  </script>
	

</body>
</html>

