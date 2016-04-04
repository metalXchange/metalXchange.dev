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
	user_id UNSIGNED NOT NULL,
	user_name VARCHAR(24) NOT NULL,
	garment_type VARCHAR(24) NOT NULL,
	size VARCHAR(24) NOT NULL,
	color VARCHAR(24) NOT NULL,
	spikes VARCHAR(24) NOT NULL,
	item_description TEXT NOT NULL,
	price DECIMAL,
	trade VARCHAR(48),
	image_url VARCHAR(64) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES users (id)
	)";

$dbc->exec($query);



?>