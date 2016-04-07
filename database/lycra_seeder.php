<?php

$lycra = array(
	array ('user_id'=>3, 'create_date'=>'2016-01-01', 'type'=>'pants', 'size'=>'medium', 'color'=>'multiple neaon', 'animal_stripe'=>'all of them', 'item_description'=>'During my brief reprieve from Sabbath, I thought about joining one of those L.A. hair bands. I bought these in anticipation, but luckily never got an opportunity to wear them.', 'price'=>50, 'trade'=>1, 'trade_description'=>'This is a trade description.', 'image_url'=>'/img/uploads/lyc_pants.jpg'),
	array ('user_id'=>7, 'create_date'=>'2016-01-01', 'type'=>'vest', 'size'=>'too tight', 'color'=>'black and white', 'animal_stripe'=>'no', 'item_description'=>'Won this at a stip poker game from one of the guys from Quiet Riot; found it in an old tour bag recently, and wanted to get rid of it ASAP.', 'price'=>10, 'trade'=>1, 'trade_description'=>'This is a trade description.', 'image_url'=>'/img/uploads/lyc_vest.jpg'),
	array ('user_id'=>5, 'create_date'=>'2016-01-01', 'type'=>'gloves', 'size'=>'medium', 'color'=>'', 'animal_stripe'=>'no', 'item_description'=>'Scary skeleton hands; good for drummers, vocalists... maybe even a bassist.', 'price'=>50, 'trade'=>0, 'trade_description'=>null, 'image_url'=>'/img/uploads/lyc_glove.jpg'),
	array ('user_id'=>1, 'create_date'=>'2016-01-01', 'type'=>'unisuit', 'size'=>'medium', 'color'=>'black and yellow', 'animal_stripe'=>'bumble bee', 'item_description'=>'Unisuit from Stryper... any takers? Please?', 'price'=>30, 'trade'=>1, 'trade_description'=>'This is a trade description.', 'image_url'=>'/img/uploads/lyc_unisuit.jpg')
);

$stmt = $dbc->prepare('INSERT INTO lycra (user_id, type, size, color, animal_stripe, item_description, price, trade, image_url) VALUES (:user_id, :type, :size, :color, :animal_stripe, :item_description, :price, :trade, :image_url)');

foreach ($lycra as $item) {
    $stmt->bindValue(':user_id',  $item['user_id'],  PDO::PARAM_STR);
    $stmt->bindValue(':create_date',  $item['create_date'],  PDO::PARAM_STR);
    $stmt->bindValue(':type',  $item['type'],  PDO::PARAM_STR);
    $stmt->bindValue(':size',  $item['size'],  PDO::PARAM_STR);
    $stmt->bindValue(':color',  $item['color'],  PDO::PARAM_STR);
    $stmt->bindValue(':animal_stripe',  $item['animal_stripe'],  PDO::PARAM_STR);
    $stmt->bindValue(':item_description',  $item['item_description'],  PDO::PARAM_STR);
    $stmt->bindValue(':price',  $item['price'],  PDO::PARAM_STR);
    $stmt->bindValue(':trade',  $item['trade'],  PDO::PARAM_STR);
    $stmt->bindValue(':trade_description',  $item['trade_description'],  PDO::PARAM_STR);
    $stmt->bindValue(':image_url',  $item['image_url'],  PDO::PARAM_STR);

    $stmt->execute();
}

?>