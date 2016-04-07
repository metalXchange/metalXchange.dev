<?php 





$query = "CREATE TABLE pyrotechnics (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	create_date DATE NOT NULL,
	user_id INT UNSIGNED NOT NULL,
	type VARCHAR(24) NOT NULL,
	headline VARCHAR(36) NOT NULL,
	brand VARCHAR(24) NOT NULL,
	homemade VARCHAR(48),
	casualties VARCHAR(48),
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