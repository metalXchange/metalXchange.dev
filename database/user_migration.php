<?php 





$query = "CREATE TABLE users (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	join_date DATE NOT NULL,
	first_name VARCHAR(25) NOT NULL,
	last_name VARCHAR(25) NOT NULL,
	user_name VARCHAR(25) NOT NULL,
	password VARCHAR(25) NOT NULL,
	email VARCHAR(50) NOT NULL,
	band_name VARCHAR(50) NOT NULL,
	instrument VARCHAR(50) NOT NULL,
	soul_possession TINYINT NOT NULL,
	bio TEXT,
	image_url VARCHAR(100),
	PRIMARY KEY (id)
	)";

$dbc->exec($query);



?>