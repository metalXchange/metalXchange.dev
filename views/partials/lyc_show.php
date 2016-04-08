<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
	 		<div class="panel panel-default">
			<!-- Default panel contents -->
				<div class="panel-heading"><h4 class='subhead'> <?= $item->headline ?> </h4></div>
			<!-- List group -->
				<ul class="list-group">
				<li class="list-group-item"><strong>Type: </strong> <?= $item->type ?> </li>
				<li class="list-group-item"><strong>Size: </strong> <?= $item->size ?> </li>
				<li class="list-group-item"><strong>Color: </strong> <?= $item->color ?> </li>
				<li class="list-group-item"><strong>Animal Print? </strong> <?= $item->animal_stripe ?> </li>
				<li class="list-group-item"><strong>Price: </strong> $<?= $item->price ?> </li>
				<li class="list-group-item"><strong>Trade?: </strong> <?php echo $item->trade ? 'yes' : 'no'; ?></li>
				<li class="list-group-item"><strong>What for?: </strong> <?= $item->trade_desc ?> </li>
				</ul>
			<!-- description and photo -->
				<div class="panel-body">
					<p><?=$item->item_description?></p>
				</div>
				<div class='show_btn'>
					<a href="/users.show.php?id=<?= $item->user_id ?>"><span class="badge">Seller's Profile</span></a>
					<a href="/ads.index.php?table=<?= $table ?>"><span class="badge">Back to <?= $table ?></span></a>
				</div>
			</div> <!-- end panel -->
		</div> <!-- end col-xs-12 col-sm-6 col-md-8 -->

		<div class="col-xs-12 col-sm-6 col-md-6">
			<img class="image" src=<?=$item->image_url?> alt="">
		</div> <!-- end col-xs-12 col-sm-6 col-md-8 -->

	</div> <!-- end row -->