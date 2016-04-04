<?php 

	$temp = $_GET['type'];
	$headline = ucfirst($temp);

	$data = [
			 'item1'=>[
				'type'=>'Flying V\'s',
				'brand'=>'Gibson',
				'numStrings'=>6,
				'numNecks'=>1,
				'price'=>1200.99,
				'trade'=>'nope',
				'img'=>'/img/uploads/gtr_gibson_flying_v.jpg'
				],
			 'item2'=>[
				'type'=>'Random Pointy',
				'brand'=>'B.C. Rich',
				'numStrings'=>6,
				'numNecks'=>1,
				'price'=>500.00,
				'trade'=>'possibly',
				'img'=>'/img/uploads/gtr_bcrich_warlock.jpg'
				],
			 'item3'=>[
				'type'=>'Generally Scary',
				'brand'=>'Custom',
				'numStrings'=>7,
				'numNecks'=>1,
				'price'=>1500.00,
				'trade'=>'nope',
				'img'=>'/img/uploads/gtr_cockroach.jpg'
				]
			];

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

	<main>			
		<h3 class='headline'><?= $headline ?></h3>
		<hr>

		<?php foreach($data as $item => $array) {?>
			<div class='item'>
				<div>
					<h4><strong>Type: </strong><?=$array['type']?></h4>
					<h4><strong>Brand: </strong><?=$array['brand']?></h4>
					<h4><strong>No. of Strings: </strong><?=$array['numStrings']?></h4>
					<h4><strong>No. of Necks: </strong><?=$array['numNecks']?></h4>
					<h4><strong>Price: </strong>$<?=$array['price']?></h4>
					<h4><strong>Trade?: </strong><?=$array['trade']?></h4>
					<img class="image" src=<?=$array['img']?> alt="">
				</div>
			</div>
		<?php } ?>

	</main>

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