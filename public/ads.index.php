<?php 

// this is where any necessary embedded PHP will be included

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
		<h3 class='headline'>Guitars</h3>
		<hr>
		<div class='item'>
			<div>
				<h4><strong>Type: </strong>Flying V's</h4>
				<h4><strong>Brand: </strong>Gibson</h4>
				<h4><strong>No. of Strings: </strong>6</h4>
				<h4><strong>No. of Necks: </strong>1</h4>
				<h4><strong>Price: </strong>$1200.00</h4>
				<h4><strong>Trade?: </strong>no</h4>
				<img class="image" src="/img/uploads/gtr_gibson_flying_v.jpg" alt="">
			</div>
		</div>

		<div class='item'>
			<div>
				<h4><strong>Type: </strong>Random Pointy</h4>
				<h4><strong>Brand: </strong>B.C. Rich</h4>
				<h4><strong>No. of Strings: </strong>6</h4>
				<h4><strong>No. of Necks: </strong>1</h4>
				<h4><strong>Price: </strong>$500.00</h4>
				<h4><strong>Trade?: </strong>possibly</h4>
				<img class="image" src="/img/uploads/gtr_bcrich_warlock.jpg" alt="">
			</div>
		</div>

		<div class='item'>
			<div>
				<h4><strong>Type: </strong>Generally Scary</h4>
				<h4><strong>Brand: </strong>Custom</h4>
				<h4><strong>No. of Strings: </strong>7</h4>
				<h4><strong>No. of Necks: </strong>1</h4>
				<h4><strong>Price: </strong>$1500.00</h4>
				<h4><strong>Trade?: </strong>no</h4>
				<img class="image" src="/img/uploads/gtr_cockroach.jpg" alt="">
			</div>
		</div>

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