
/*
 * Editor client script for DB table usuaris
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.usuaris.php",
		"table": "#usuaris",
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
				"label": "usuari",
				"name": "usuari"
			},
			{
				"label": "password",
				"name": "password"
			},
			{
				"label": "permisos",
				"name": "permisos"
			}
		]
	} );

	$('#usuaris').DataTable( {
		"dom": "Tfrtip",
		"ajax": "php/table.usuaris.php",
		"columns": [
			{
				"data": "nom"
			},
			{
				"data": "cognoms"
			},
			{
				"data": "usuari"
			},
			{
				"data": "password"
			},
			{
				"data": "permisos"
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

