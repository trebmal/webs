
/*
 * Editor client script for DB table prova
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.prova.php",
		"table": "#prova",
		"fields": [
			{
				"label": "nom",
				"name": "nombre"
			},
			{
				"label": "cognom",
				"name": "apelidos"
			}
		]
	} );

	$('#prova').DataTable( {
		"dom": "Tfrtip",
		"ajax": "php/table.prova.php",
		"columns": [
			{
				"data": "nombre"
			},
			{
				"data": "apelidos"
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

