<?php

/*
 * Editor server script for DB table usuaris3
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "../php/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'personal' )
	->fields(
		Field::inst( 'nom' ),
		Field::inst( 'cognoms' ),
		Field::inst( 'email' ),
		Field::inst( 'password' ),
		Field::inst( 'permisos' ),
		Field::inst( 'dep' ),
		Field::inst( 'nif' ),
		Field::inst( 'codi_conei' )
	)

	->process( $_POST )
	->json();
