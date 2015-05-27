<?php

/*
 * Editor server script for DB table usuaris
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
	DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'usuaris', 'id' )
	->fields(
		Field::inst( 'nom' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'cognoms' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'usuari' )
			->validator( 'Validate::notEmpty' )
			->validator( 'Validate::unique' ),
		Field::inst( 'password' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'permisos' )
			->validator( 'Validate::notEmpty' )
	)
	->process( $_POST )
	->json();
