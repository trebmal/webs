<?php

/*
 * Editor server script for DB table persones
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
Editor::inst( $db, 'persones', 'id' )
	->fields(
		Field::inst( 'nom' ),
		Field::inst( 'cognoms' ),
		Field::inst( 'password' )
	)
	->process( $_POST )
	->json();
