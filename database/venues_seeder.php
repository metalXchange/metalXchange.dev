<?php

$venues = array(

    array ('user_id'=>4, 'create_date' => '2016-01-01', 'type'=>'outdoor', 'headline'=>'Urban decay splendor', 'capacity'=>400, 'lighting'=>'The sun', 'pa_systems'=>'We\'ve got a list of preferred vendors.', 'beverages'=>'We\'ve got a list of preferred vendors', 'item_description'=>'We\'ve  got \'permission\' from the property owners to hold outdoor events at this prime location, with all of the gravitas you need for a daytime concert.', 'price'=>1500, 'trade'=>0, 'trade_desc'=>'', 'image_url'=>'/img/uploads/ven_abandonedLot.jpg'),
    array ('user_id'=>8, 'create_date' => '2016-01-01', 'type'=>'dive_bar', 'headline'=>'San Antonio staple', 'capacity'=>100, 'lighting'=>'Par cans with gels', 'pa_systems'=>'Peavy 300 watt / 16 channel board', 'beverages'=>'', 'item_description'=>'Of course Bond\'s 007 is owned by a British bloke; why do you think we prefer heavy metal bands here?', 'price'=>500, 'trade'=>0, 'trade_desc'=>'', 'image_url'=>'/img/uploads/ven_bonds007.jpg'),
    array ('user_id'=>9, 'create_date' => '2016-01-01', 'type'=>'aband_bldg', 'headline'=>'Quintessential Quonset', 'capacity'=>350, 'lighting'=>'Barrel fires', 'pa_systems'=>'Hook up your amps to some car batteries.', 'beverages'=>'', 'item_description'=>'Appropriately scary building, perfect for Black Metal or Death Metal with certain ambiance needs…', 'price'=>500, 'trade'=>1, 'trade_desc'=>'Any vestal virgins?', 'image_url'=>'/img/uploads/ven_abandonedBldg.jpg'),
	array ('user_id'=>5, 'create_date' => '2016-01-01', 'type'=>'basement' , 'headline'=>'My mom\'s basement', 'capacity'=>20, 'lighting'=>'Various desk lamps', 'pa_systems'=>'We\'ve got a karaoke machine you can patch into.', 'beverages'=>'', 'item_description'=>'Friendly duo looking to host totally rad bands in our basement; perfect for your first gig or an open mike competition doing Ratt covers…', 'price'=>50, 'trade'=>1, 'trade_desc'=>'Can we make out with your sister?', 'image_url'=>'/img/uploads/ven_ww_basement.jpg')
);

$stmt = $dbc->prepare('INSERT INTO venues (user_id, type, headline, capacity, lighting, pa_systems, beverages, item_description, price, trade, trade_desc, image_url) VALUES (:user_id, :type, :headline, :capacity, :lighting, :pa_systems, :beverages, :item_description, :price, :trade, :trade_desc, :image_url)');

foreach ($venues as $item) {
    $stmt->bindValue(':create_date', $item['create_date'], PDO::PARAM_STR);
    $stmt->bindValue(':user_id',  $item['user_id'],  PDO::PARAM_STR);
    $stmt->bindValue(':headline',  $item['headline'],  PDO::PARAM_STR);
    $stmt->bindValue(':type',  $item['type'],  PDO::PARAM_STR);
    $stmt->bindValue(':capacity',  $item['capacity'],  PDO::PARAM_STR);
    $stmt->bindValue(':lighting',  $item['lighting'],  PDO::PARAM_STR);
    $stmt->bindValue(':pa_systems',  $item['pa_systems'],  PDO::PARAM_STR);
    $stmt->bindValue(':beverages',  $item['beverages'],  PDO::PARAM_STR);
    $stmt->bindValue(':item_description',  $item['item_description'],  PDO::PARAM_STR);
    $stmt->bindValue(':price',  $item['price'],  PDO::PARAM_STR);
    $stmt->bindValue(':trade',  $item['trade'],  PDO::PARAM_STR);
    $stmt->bindValue(':trade_desc',  $item['trade_desc'],  PDO::PARAM_STR);
    $stmt->bindValue(':image_url',  $item['image_url'],  PDO::PARAM_STR);

    $stmt->execute();
}

?>