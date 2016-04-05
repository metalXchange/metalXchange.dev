<?php

	require '../bootstrap.php';

	function pageController() {

		$id = 03;

		$profile = Guitar::find($id);

		return $profile;
	}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>metalXchange: acoutrements for the heavy metal lifestyle</title>
 	<link rel="stylesheet" href="/css/main.css">
 	<link rel="stylesheet" href="/css/bootstrap.css">
 	<link href='https://fonts.googleapis.com/css?family=UnifrakturCook:700' rel='stylesheet' type='text/css'>
 </head>
 <body>
	<?php include '../views/partials/header.php' ?>
	<?php include '../views/partials/navbar.php' ?>

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
		 		<div class="panel panel-default">
				<!-- Default panel contents -->
					<div class="panel-heading"><h4 class='subhead'><?= $headline ?></h4></div>
				<!-- List group -->
					<ul class="list-group">
					<li class="list-group-item"><strong>Type: </strong> <?= $type ?> </li>
					<li class="list-group-item"><strong>Brand: </strong> <?= $brand ?> </li>
					<li class="list-group-item"><strong>No. of Strings: </strong> <?= $numStrings ?> </li>
					<li class="list-group-item"><strong>No. of Necks: </strong> <?= $numNecks ?> </li>
					<li class="list-group-item"><strong>Price: </strong> $<?= $price ?> </li>
					<li class="list-group-item"><strong>Trade?: </strong> <?= $trade ?> </li>
					</ul>
				<!-- description and photo -->
					<div class="panel-body">
						<p><?=$desc?></p>
					</div>
					<button type="submit" class="btn btn-default">Contact Seller</button>
				</div> <!-- end panel -->
			</div> <!-- end col-xs-12 col-sm-6 col-md-8 -->

			<div class="col-xs-12 col-sm-6 col-md-6">
				<img class="image" src=<?=$img?> alt="">
			</div> <!-- end col-xs-12 col-sm-6 col-md-8 -->

		</div> <!-- end row -->


	<?php include '../views/partials/footer.php' ?>

		<script src="/js/jquery-1.12.0.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/main.js"></script>
	 	<script>
	 		"use strict";

	 		// this is where any embedded js will be included

 		</script>

	</body>
</html>