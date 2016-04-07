<?php 





$query = "CREATE TABLE guitars (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	user_id INT UNSIGNED NOT NULL,
	type VARCHAR(24) NOT NULL,
	headline VARCHAR(36) NOT NULL,
	brand VARCHAR(24) NOT NULL,
	num_strings INT NOT NULL,
	num_necks INT NOT NULL,
	item_description TEXT NOT NULL,
	price DECIMAL,
	trade VARCHAR(48),
	trade_desc TEXT,
	image_url VARCHAR(64) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES users (id)
	)";

$dbc->exec($query);



?>