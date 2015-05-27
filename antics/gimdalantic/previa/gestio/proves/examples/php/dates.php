<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "../../php/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'usuaris' )
	->fields(
		Field::inst( 'id' ),
		Field::inst( 'nom' ),
		Field::inst( 'cognoms' ),			
		Field::inst( 'email' )
			
	)
	->process( $_POST )
	->json();

