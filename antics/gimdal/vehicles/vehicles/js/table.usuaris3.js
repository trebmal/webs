
/*
 * Editor client script for DB table usuaris3
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.usuaris3.php",
		"table": "vehicles",
		"fields": [

			{
				"label": "matricula",
				"name": "vehicles.matricula"
			},

			{
				"label": "conductor",
				"name": "personal.nom",
				"type":  "select"
			},

			{
				"label": "departament",
				"name": "personal.dep"
			},

			{
				"label": "model",
				"name": "vehicles.model"
			},

			{
				"label": "inici",
				"name": "vehicles.inici"
			},

			{
				"label": "final",
				"name": "vehicles.final"
			},

			{
				"label": "ITV",
				"name": "vehicles.itv"
			}


	]
	} );

	$('#usuaris3').DataTable( {
		"dom": "Tfrtip",
		"ajax": "php/table.usuaris3.php",

		"columns": [
			{"data": "vehicles.matricula"},
			{"data": "personal.nom"},
			{"data": "personal.dep"},
			{"data": "vehicles.model"},
			{"data": "vehicles.inici"},
			{"data": "vehicles.final"},
			{"data": "vehicles.itv"}
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
