<?php

$leather = array(
	array ('user_id'=>1, 'garment_type'=>'pants', 'size'=>'32 inseam', 'color'=>'black', 'spikes'=>'None, but some nice buckles', 'item_description'=>'These were some pants that Sharon bought for me, but I\'m too boomin\' fat to wear them. I think she knew all along...', 'price'=>300, 'trade'=>1, 'image_url'=>'/img/uploads/lth_ozzy_pants.jpg'),
	array ('user_id'=>5, 'garment_type'=>'vest', 'size'=>'small', 'color'=>'black', 'spikes'=>'nope', 'item_description'=>'Backup vest from the 1983 tour.', 'price'=>150, 'trade'=>1, 'image_url'=>'/img/uploads/lth_RJD_vest.jpg'),
	array ('user_id'=>5, 'garment_type'=>'codpiece', 'size'=>'xtra-large', 'color'=>'silver', 'spikes'=>'not that location', 'item_description'=>'Had an assistant arrange to have this made for me; he got the size wrong.', 'price'=>200, 'trade'=>1, 'image_url'=>'/img/uploads/lth_RJD_codpiece.jpg'),
	array ('user_id'=>6, 'garment_type'=>'boots', 'size'=>'10 narrow', 'color'=>'black', 'spikes'=>'you betcha', 'item_description'=>'Back-up boots... never really fit my style.', 'price'=>500, 'trade'=>0, 'image_url'=>'/img/uploads/lth_boots.jpeg')
);

$stmt = $dbc->prepare('INSERT INTO leather (user_id, garment_type, size, color, spikes, item_description, price, trade, image_url) VALUES (:user_id, :garment_type, :size, :color, :spikes, :item_description, :price, :trade, :image_url)');

foreach ($leather as $item) {
    $stmt->bindValue(':user_id',  $item['user_id'],  PDO::PARAM_STR);
    $stmt->bindValue(':garment_type',  $item['garment_type'],  PDO::PARAM_STR);
    $stmt->bindValue(':size',  $item['size'],  PDO::PARAM_STR);
    $stmt->bindValue(':color',  $item['color'],  PDO::PARAM_STR);
    $stmt->bindValue(':spikes',  $item['spikes'],  PDO::PARAM_STR);
    $stmt->bindValue(':item_description',  $item['item_description'],  PDO::PARAM_STR);
    $stmt->bindValue(':price',  $item['price'],  PDO::PARAM_STR);
    $stmt->bindValue(':trade',  $item['trade'],  PDO::PARAM_STR);
    $stmt->bindValue(':image_url',  $item['image_url'],  PDO::PARAM_STR);

    $stmt->execute();
}

?>