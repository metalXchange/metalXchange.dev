<?php foreach($data as $key => $value) {?>
	<div class='item'>
		<div>
			<h4><strong>Type: </strong><?=$value->type?></h4>
			<h4><strong>Capacity?: </strong><?=$value->capacity?></h4>
			<h4><strong>Lighting?: </strong><?=$value->lighting?></h4>
			<h4><strong>P.A. System?: </strong><?=$value->pa_systems?></h4>
			<h4><strong>Beverages?: </strong><?=$value->beverages?></h4>
			<h4><strong>Price: </strong>$<?=$value->price?></h4>
			<h4><strong>Trade?: </strong><?=$value->trade?></h4>
			<img class="image" src=<?=$value->image_url?> alt="">
			<a href="/ads.show.php?table=venues&id=<?=$value->id?>">See Detail</a>
		</div>
	</div>
<?php } ?>