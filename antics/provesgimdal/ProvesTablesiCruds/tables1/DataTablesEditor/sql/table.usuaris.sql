-- 
-- Editor SQL for DB table usuaris
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE `usuaris` (
	`id` int(10) NOT NULL auto_increment,
	`nom` varchar(255),
	`cognoms` varchar(255),
	`usuari` varchar(255),
	`permisos` varchar(255),
	PRIMARY KEY( `id` )
);