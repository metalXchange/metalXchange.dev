<?php 



define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'metalXchange');

define('DB_USER', 'vagrant');

define('DB_PASS', 'vagrant');

require 'db_connect.php';



$query = "DROP TABLE IF EXISTS leather";

$dbc->exec($query);

$query = "CREATE TABLE leather (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	-- I don't know exactly what each column will look like yet, but the table is created
	PRIMARY KEY (id)
	)";

$dbc->exec($query);



?>