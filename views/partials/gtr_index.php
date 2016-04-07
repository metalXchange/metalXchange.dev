<?php foreach($data as $key => $value) {?>
	<div class='item'>
		<h4 class='desc'><strong>Headline: </strong><?=$value->headline?></h4>
		<h4 class='desc'><strong>Type: </strong><?=$value->type?></h4>
		<h4 class='desc'><strong>Brand: </strong><?=$value->brand?></h4>
		<h4 class='desc'><strong>Price: </strong>$<?=$value->price?></h4>
		<h4 class='desc'><strong>Trade?: </strong><?=$value->trade?></h4>
		<a href="/ads.show.php?table=guitars&id=<?=$value->id?>"><span class="badge">See Detail</span></a>
		<hr>
	</div>
<?php } ?>