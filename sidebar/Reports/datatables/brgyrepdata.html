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
                <th>Description</th>
                <th> Male</th>
                <th>Type</th>
                <th>Female</th>
                <th>Total</th>
              <!--- <th>Action</th> -->
            </tr>
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

