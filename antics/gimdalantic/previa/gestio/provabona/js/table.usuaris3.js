
/*
 * Editor client script for DB table usuaris3
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {

	var editor = new $.fn.dataTable.Editor( {

		"ajax": "php/table.usuaris3.php",
		"table": "#usuaris3",
		"fields": [

			{
				"label": "nom",
				"name": "nom"
			},

			{
				"label": "cognoms",
				"name": "cognoms"
			},

			{
				"label": "email",
				"name": "email"
			},

			{
				"label": "permisos",
				"name": "permisos"
			},

			{
				"label": "nif",
				"name": "nif"
			}

	]
	} );



	$('#usuaris3').DataTable( {

		"dom": "Tfrtip",
		"ajax": "php/table.usuaris3.php",






		"columns": [
			{
				"data": "nom"
			},
			{
				"data": "cognoms"
			},
			{
				"data": "email"
			},
			{
				"data": "permisos"
			},
			{
				"data": "nif"
			}

		],


		"tableTools": {
			"sRowSelect": "os",
			"aButtons": [
				{ "sExtends": "editor_create", "editor": editor },
				{ "sExtends": "editor_edit",   "editor": editor },
				{ "sExtends": "editor_remove", "editor": editor },
			]

		}

	} );
} );


}(jQuery));
