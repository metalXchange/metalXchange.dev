<?php 





$query = "CREATE TABLE venues (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	create_date DATE NOT NULL,
	user_id INT UNSIGNED NOT NULL,
	type VARCHAR(24) NOT NULL,
	capacity INT NOT NULL,
	lighting VARCHAR(48) NOT NULL,
	pa_systems VARCHAR(48) NOT NULL,
	beverages VARCHAR(48) NOT NULL,
	item_description TEXT NOT NULL,
	price DECIMAL,
	trade VARCHAR(48),
	trade_description TEXT,
	image_url VARCHAR(64) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES users (id)
	)";

$dbc->exec($query);



?>