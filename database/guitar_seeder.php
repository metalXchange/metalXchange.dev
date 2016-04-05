<?php

$guitars = array(
	array ('user_id'=>2, 'guitar_type'=>'Flying V\'s', 'brand'=>'Gibson', 'num_strings'=>6, 'num_necks'=>1, 'item_description'=>'', 'price'=>1665.99, 'trade'=>0, 'image_url'=>'/img/uploads/gtr_gibson_flying_v.jpg'),
	array ('user_id'=>2, 'guitar_type'=>'Random Pointy', 'brand'=>'B.C. Rich', 'num_strings'=>6, 'num_necks'=>1, 'item_description'=>'', 'price'=>666.00, 'trade'=>0, 'image_url'=>'/img/uploads/gtr_bcrich_warlock.jpg'),
	array ('user_id'=>7, 'guitar_type'=>'Generally Scary', 'brand'=>'Custom', 'num_strings'=>6, 'num_necks'=>1, 'item_description'=>'This is a relic from the nether-regions; it was briefly in possession of my soul, but I was able to cross the River Styx and recover it. It is optimized for shredding archpeggios, so for the right guitarist, it would be a good fit.', 'price'=>1500.00, 'trade'=>0, 'image_url'=>'/img/uploads/gtr_cockroach.jpg'),
	array ('user_id'=>7, 'guitar_type'=>'Novelty', 'brand'=>'Custom', 'num_strings'=>6, 'num_necks'=>1, 'item_description'=>'Metal Chain Guitar, Welded heavy duty chain, Maple neck, Rosewood fingerboard, 22 frets, 2 humbucker pickups, 3 Ways toggle switch, Volume and Tone "skull" knobs.', 'price'=>900.00, 'trade'=>1, 'image_url'=>'/img/uploads/gtr_chain.jpg')
);


$stmt = $dbc->prepare('INSERT INTO guitars (user_id, guitar_type, brand, num_strings, num_necks, item_description, price, trade, image_url) VALUES (:user_id, :guitar_type, :brand, :num_strings, :num_necks, :item_description, :price, :trade, :image_url)');

foreach ($guitars as $item) {
    $stmt->bindValue(':user_id',  $item['user_id'],  PDO::PARAM_STR);
    $stmt->bindValue(':guitar_type',  $item['guitar_type'],  PDO::PARAM_STR);
    $stmt->bindValue(':brand',  $item['brand'],  PDO::PARAM_STR);
    $stmt->bindValue(':num_strings',  $item['num_strings'],  PDO::PARAM_STR);
    $stmt->bindValue(':num_necks',  $item['num_necks'],  PDO::PARAM_STR);
    $stmt->bindValue(':item_description',  $item['item_description'],  PDO::PARAM_STR);
    $stmt->bindValue(':price',  $item['price'],  PDO::PARAM_STR);
    $stmt->bindValue(':trade',  $item['trade'],  PDO::PARAM_STR);
    $stmt->bindValue(':image_url',  $item['image_url'],  PDO::PARAM_STR);

    $stmt->execute();
}

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


?>