<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
	 		<div class="panel panel-default">
			<!-- Default panel contents -->
				<div class="panel-heading"><h4 class='subhead'>Headline goes here...</h4></div>
			<!-- List group -->
				<ul class="list-group">
				<li class="list-group-item"><strong>Type: </strong> <?= $type ?> </li>
				<li class="list-group-item"><strong>Capacity: </strong> <?= $capacity ?> </li>
				<li class="list-group-item"><strong>Lighting? </strong> <?= $lighting ?> </li>
				<li class="list-group-item"><strong>P.A. System? </strong> <?= $pa_systems ?> </li>
				<li class="list-group-item"><strong>Beverages? </strong> <?= $beverages ?> </li>
				<li class="list-group-item"><strong>Price: </strong> $<?= $price ?> </li>
				<li class="list-group-item"><strong>Trade?: </strong> <?= $trade ?> </li>
				</ul>
			<!-- description and photo -->
				<div class="panel-body">
					<p><?=$item_description?></p>
				</div>
				<a href="/user.show.php?id=<?= $user_id ?>">Seller's Profile</a>
			</div> <!-- end panel -->
		</div> <!-- end col-xs-12 col-sm-6 col-md-8 -->

		<div class="col-xs-12 col-sm-6 col-md-6">
			<img class="image" src=<?=$image_url?> alt="">
		</div> <!-- end col-xs-12 col-sm-6 col-md-8 -->

	</div> <!-- end row -->