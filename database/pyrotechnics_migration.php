<?php 





$query = "CREATE TABLE pyrotechnics (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	user_id INT UNSIGNED NOT NULL,
	implement_type VARCHAR(24) NOT NULL,
	brand VARCHAR(24) NOT NULL,
	homemade boolean NOT NULL,
	casualties VARCHAR(48),
	item_description TEXT NOT NULL,
	price DECIMAL,
	trade VARCHAR(48),
	image_url VARCHAR(64) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES users (id)
	)";

$dbc->exec($query);



?>