<?php foreach($data as $key => $value) {?>
	<div class='item'>
		<div>
			<h4><strong>Type: </strong><?=$value->implement_type?></h4>
			<h4><strong>brand: </strong><?=$value->brand?></h4>
			<h4><strong>Homemade?: </strong><?=$value->homemade?></h4>
			<h4><strong>Casualties?: </strong><?=$value->casualties?></h4>
			<h4><strong>Price: </strong>$<?=$value->price?></h4>
			<h4><strong>Trade?: </strong><?=$value->trade?></h4>
			<img class="image" src=<?=$value->image_url?> alt="">
			<a href="/ads.show.php?table=pyrotechnics&id=<?=$value->id?>">See Detail</a>
		</div>
	</div>
<?php } ?>