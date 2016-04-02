<?php 

// this will be the display of a single item selected from the index

 ?>


 <!doctype html>

 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>metalXchange: acoutrements for the heavy metal lifestyle</title>
 	<link rel="stylesheet" href="/css/main.css">
 	<link rel="stylesheet" href="/css/bootstrap.css">
 </head>
 <body>
	<?php include '../views/partials/header.php' ?>
	<?php include '../views/partials/navbar.php' ?>



	<!-- item number (primary key) --------  date-added  ----------  username ---------  type  ---------  brand  ---------   No. of strings --------  No. of necks  ---------  price (default null) --------  trade (default null)-->

	<div>Type: Random Pointy</div>
	<br><br>
	<div>Brand: Gibson</div>
	<br><br>
	<div>No. of Strings: 6</div>
	<br><br>
	<div>No. of Necks: 1</div>
	<br><br>
	<div>Price: $5.00</div>
	<br><br>
	

	<?php include '../views/partials/footer.php' ?>

	<script src="/js/jquery-1.12.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>
 	<script>

 		// this will include any necessary embedded javascript

 	</script>
 
 </body>
 </html>