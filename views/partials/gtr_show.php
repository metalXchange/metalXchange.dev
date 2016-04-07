<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
	 		<div class="panel panel-default">
			<!-- Default panel contents -->
				<div class="panel-heading"><h4 class='subhead'> <?= $headline ?> </h4></div>
			<!-- List group -->
				<ul class="list-group">
				<li class="list-group-item"><strong>Type: </strong> <?= $type ?> </li>
				<li class="list-group-item"><strong>Brand: </strong> <?= $brand ?> </li>
				<li class="list-group-item"><strong>No. of Strings: </strong> <?= $num_strings ?> </li>
				<li class="list-group-item"><strong>No. of Necks: </strong> <?= $num_necks ?> </li>
				<li class="list-group-item"><strong>Price: </strong> $<?= $price ?> </li>
				<li class="list-group-item"><strong>Trade?: </strong> <?= $trade ?> </li>
				<li class="list-group-item"><strong>What for?: </strong> <?= $trade_desc ?> </li>
				</ul>
			<!-- description and photo -->
				<div class="panel-body">
					<p><?=$item_description?></p>
				</div>
				<div class='show_btn'>
					<a href="/users.show.php?id=<?= $user_id ?>"><span class="badge">Seller's Profile</span></a>
					<a href="/ads.index.php?table=<?= $table ?>"><span class="badge">Back to <?= $table ?></span></a>
				</div>
			</div> <!-- end panel -->
		</div> <!-- end col-xs-12 col-sm-6 col-md-8 -->

		<div class="col-xs-12 col-sm-6 col-md-6">
			<img class="image" src=<?=$image_url?> alt="">
		</div> <!-- end col-xs-12 col-sm-6 col-md-8 -->

	</div> <!-- end row -->