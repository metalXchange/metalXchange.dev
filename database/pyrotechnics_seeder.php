<?php

$pyrotechnics = array(

	array ('user_id'=>4, 'create_date' => '2016-01-01', 'type'=>'smoke_pot', 'headline'=>'Puff the magic dragon', 'brand'=>'Smoke Fountain', 'homemade'=>0, 'casualties'=>'none', 'item_description'=>'4 different colors; lasts up to 2 minutes', 'price'=>10, 'trade'=>1, 'trade_desc'=>'Snicker\'s bar?', 'image_url'=>'/img/uploads/pyr_SmokeFountain.jpg'),
	array ('user_id'=>8, 'create_date' => '2016-01-01', 'type'=>'concussion', 'headline'=>'Boom goes the... stuff', 'brand'=>'El Especial', 'homemade'=>1, 'casualties'=>'I\'ll check when my ears stop ringing.', 'item_description'=>'I put 4 M80\'s in paint can... seemed liked a good item at the time.', 'price'=>100, 'trade'=>1, 'trade_desc'=>'Any small woodland creature.', 'image_url'=>'/img/uploads/pyr_concussion.jpg'),
	array ('user_id'=>2, 'create_date' => '2016-01-01', 'type'=>'fireballs', 'headline'=>'Professional Effects', 'brand'=>'CHAMELEON', 'homemade'=>0, 'casualties'=>'None', 'item_description'=>'Using a re-loadable canister system, the Chameleon performs just like a propane system but at a fraction of the cost and set-up time. Only used once.', 'price'=>2000, 'trade'=>0, 'trade_desc'=>'', 'image_url'=>'/img/uploads/pyr_SmokeFountain.jpg'),
	array ('user_id'=>5, 'create_date' => '2016-01-01', 'type'=>'fire_projector', 'headline'=>'I am the Dragon Lord', 'brand'=>'Homemade', 'homemade'=>1, 'casualties'=>'A few... nothing to see here.', 'item_description'=>'My lawyer advised me it\'s best to plead the fifth on this...', 'price'=>500, 'trade'=>1, 'trade_desc'=>'An affidavit revoking any responsibility... and an iPad.', 'image_url'=>'/img/uploads/pyr_flameProjector.jpg')
);

$stmt = $dbc->prepare('INSERT INTO pyrotechnics (user_id, create_date, type, headline, brand, homemade, casualties, item_description, price, trade, trade_desc, image_url) VALUES (:user_id, :create_date, :type, :headline, :brand, :homemade, :casualties, :item_description, :price, :trade, :trade_desc, :image_url)');

foreach ($pyrotechnics as $item) {
    $stmt->bindValue(':user_id',  $item['user_id'],  PDO::PARAM_STR);
    $stmt->bindValue(':create_date',  $item['create_date'],  PDO::PARAM_STR);
    $stmt->bindValue(':type',  $item['type'],  PDO::PARAM_STR); 
    $stmt->bindValue(':headline',  $item['headline'],  PDO::PARAM_STR);
    $stmt->bindValue(':brand',  $item['brand'],  PDO::PARAM_STR);
    $stmt->bindValue(':homemade',  $item['homemade'],  PDO::PARAM_STR);
    $stmt->bindValue(':casualties',  $item['casualties'],  PDO::PARAM_STR);
    $stmt->bindValue(':item_description',  $item['item_description'],  PDO::PARAM_STR);
    $stmt->bindValue(':price',  $item['price'],  PDO::PARAM_STR);
    $stmt->bindValue(':trade',  $item['trade'],  PDO::PARAM_STR);
    $stmt->bindValue(':trade_desc',  $item['trade_desc'],  PDO::PARAM_STR);
    $stmt->bindValue(':image_url',  $item['image_url'],  PDO::PARAM_STR);

    $stmt->execute();
}

?>