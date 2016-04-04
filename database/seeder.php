<?php

$items = array(
	array ('key'=>'value', ),

);


$stmt = $dbc->prepare('INSERT INTO table_name (column_name, ) VALUES (:column_name, )');

foreach ($items as $item) {
    $stmt->bindValue(':column_name',  $item['column_name'],  PDO::PARAM_STR);

    $stmt->execute();
}

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


?>