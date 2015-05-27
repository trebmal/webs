<html>
<head>

	<link rel="stylesheet" type="text/css" href="jquery.dataTables.css">

	<script type="text/javascript" language="javascript" src="jquery.js"></script>
	<script type="text/javascript" language="javascript" src="jquery.dataTables.js"></script>
    
    <script>
    
		$(document).ready(function() {			   
			$('#example').dataTable( {				
				"ajax": "funciones.php",					
					 "columns": [
						{ "data": "id" },
						{ "data": "nom" },
						{ "data": "cognoms" }
						]
			    });
			});





</script>

</head>
<body>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>cognom</th>
                
            </tr>
        </thead>
        <tbody>
        </tbody>  
	</table>
</body>
</html>