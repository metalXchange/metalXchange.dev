<?php foreach($data as $key => $value) {?>
	<div class='item'>
		<div>
			<h4><strong>Type: </strong><?=$value->garment_type?></h4>
			<h4><strong>Size: </strong><?=$value->size?></h4>
			<h4><strong>Color: </strong><?=$value->color?></h4>
			<h4><strong>Animal stripe pattern?: </strong><?=$value->animal_stripe?></h4>
			<h4><strong>Price: </strong>$<?=$value->price?></h4>
			<h4><strong>Trade?: </strong><?=$value->trade?></h4>
			<img class="image" src=<?=$value->image_url?> alt="">
			<a href="/ads.show.php?table=lycra&id=<?=$value->id?>">See Detail</a>
		</div>
	</div>
<?php } ?>