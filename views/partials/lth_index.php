<?php foreach($data as $key => $value) {?>
	<div class='item'>
		<div>
			<h4><strong>Type: </strong><?=$value->garment_type?></h4>
			<h4><strong>Size: </strong><?=$value->size?></h4>
			<h4><strong>Color: </strong><?=$value->color?></h4>
			<h4><strong>Spikes?: </strong><?=$value->spikes?></h4>
			<h4><strong>Price: </strong>$<?=$value->price?></h4>
			<h4><strong>Trade?: </strong><?=$value->trade?></h4>
			<img class="image" src=<?=$value->image_url?> alt="">
		</div>
	</div>
<?php } ?>