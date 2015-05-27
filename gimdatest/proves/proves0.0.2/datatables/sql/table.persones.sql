-- 
-- Editor SQL for DB table persones
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE `persones` (
	`id` int(10) NOT NULL auto_increment,
	`nom` varchar(255),
	`cognoms` varchar(255),
	`password` varchar(255),
	PRIMARY KEY( `id` )
);