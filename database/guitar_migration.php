<?php 



define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'metalXchange');

define('DB_USER', 'vagrant');

define('DB_PASS', 'vagrant');

require 'db_connect.php';



$query = "DROP TABLE IF EXISTS guitars";

$dbc->exec($query);

$query = "CREATE TABLE guitars (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	user_id UNSIGNED NOT NULL,
	user_name VARCHAR(24) NOT NULL,
	guitar_type VARCHAR(24) NOT NULL,
	brand VARCHAR(24) NOT NULL,
	num_strings INT NOT NULL,
	num_necks INT NOT NULL,
	item_description TEXT NOT NULL,
	price DECIMAL,
	trade VARCHAR(48),
	image_url VARCHAR(64) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES users (id)
	)";

$dbc->exec($query);



?>