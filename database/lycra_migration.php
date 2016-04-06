<?php 





$query = "CREATE TABLE lycra (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	user_id INT UNSIGNED NOT NULL,
	type VARCHAR(24) NOT NULL,
	size VARCHAR(24) NOT NULL,
	color VARCHAR(24) NOT NULL,
	animal_stripe VARCHAR(24) NOT NULL,
	item_description TEXT NOT NULL,
	price DECIMAL,
	trade VARCHAR(48),
	image_url VARCHAR(64) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES users (id)
	)";

$dbc->exec($query);



?>