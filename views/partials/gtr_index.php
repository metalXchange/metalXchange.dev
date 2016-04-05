<?php foreach($data as $key => $value) {?>
	<div class='item'>
		<div>
			<h4><strong>Type: </strong><?=$value->guitar_type?></h4>
			<h4><strong>Brand: </strong><?=$value->brand?></h4>
			<h4><strong>No. of Strings: </strong><?=$value->num_strings?></h4>
			<h4><strong>No. of Necks: </strong><?=$value->num_necks?></h4>
			<h4><strong>Price: </strong>$<?=$value->price?></h4>
			<h4><strong>Trade?: </strong><?=$value->trade?></h4>
			<img class="image" src=<?=$value->image_url?> alt="">
		</div>
	</div>
<?php } ?>