<?php 





$query = "CREATE TABLE users (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	is_admin BOOLEAN NOT NULL,
	join_date DATE NOT NULL,
	first_name VARCHAR(100) NOT NULL,
	last_name VARCHAR(150) NOT NULL,
	user_name VARCHAR(50) NOT NULL,
	email VARCHAR(200) NOT NULL,
	band_name VARCHAR(200) NOT NULL,
	instrument VARCHAR(150) NOT NULL,
	soul_possession BOOLEAN NOT NULL,
	bio TEXT,
	image_url VARCHAR(250),
	PRIMARY KEY (id)
	)";

$dbc->exec($query);



?>