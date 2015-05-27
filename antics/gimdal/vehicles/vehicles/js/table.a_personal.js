
/*
 * Editor client script for DB table usuaris3
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.a_personal.php",
		"table": "#personal",
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
				"label": "password",
				"name": "password"
			},

			{
				"label": "permisos",
				"name": "permisos"
			},

			{
				"label": "dep",
				"name": "dep"
			},

			{
				"label": "nif",
				"name": "nif"
			},

			{
				"label": "codi_conei",
				"name": "codi_conei"
			}





	]
	} );

	$('#personal').DataTable( {
		"dom": "Tfrtip",
		"ajax": "php/table.a_personal.php",

		"columns": [
			{"data": "nom"},
			{"data": "cognoms"},
			{"data": "email"},
			{"data": "password"},
			{"data": "permisos"},
			{"data": "dep"},
			{"data": "nif"},
			{"data": "codi_conei"}
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
