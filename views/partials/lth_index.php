<?php foreach($data as $key => $value) {?>
	<div class='item'>
		<h4 class='desc'><strong>headline: </strong><?=$value->headline?></h4>
		<h4 class='desc'><strong>Type: </strong><?=$value->type?></h4>
		<h4 class='desc'><strong>Size: </strong><?=$value->size?></h4>
		<h4 class='desc'><strong>Price: </strong>$<?=$value->price?></h4>
		<h4 class='desc'><strong>Trade?: </strong><?=$value->trade?></h4>
		<a href="/ads.show.php?table=leather&id=<?=$value->id?>"><span class="badge">See Detail</span></a>
		<hr>
	</div>
<?php } ?>