
/*
 * Editor client script for DB table persones
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.persones.php",
		"table": "#persones",
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
				"label": "password",
				"name": "password"
			}
		]
	} );

	$('#persones').DataTable( {
	"dom": "Tfrtip",
		"ajax": "php/table.persones.php",
		"columns": [
			{
				"data": "nom"
			},
			{
				"data": "cognoms"
			},
			{
				"data": "password"
			}
		],
		"tableTools": {
			"sRowSelect": "os",
			"aButtons": [
				{ "sExtends": "editor_create", "editor": editor },
				{ "sExtends": "editor_edit",   "editor": editor },
				{ "sExtends": "editor_remove", "editor": editor }
			]
		}
	} );
} );

}(jQuery));
