<?php

/*
 * Editor server script for DB table usuaris3
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'vehicles' )
	->fields(
		Field::inst( 'vehicles.matricula' ),
		Field::inst( 'vehicles.id_conductor' )
						->options( 'personal', 'id', 'nom' ),
		Field::inst( 'personal.nom' ),
		Field::inst( 'personal.dep' ),
		Field::inst( 'vehicles.model' ),
		Field::inst( 'vehicles.inici' ),
		Field::inst( 'vehicles.final' ),
		Field::inst( 'vehicles.itv' )
	)

	  ->leftJoin( 'personal',   'personal.id',          '=', 'vehicles.id_conductor' )

/*    ->leftJoin( 'user_dept', 'users.id',          '=', 'user_dept.user_id' )
    ->leftJoin( 'dept',      'user_dept.dept_id', '=', 'dept.id' )

*/






	->process( $_POST )
	->json();
