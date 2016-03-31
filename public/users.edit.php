<?php 

// form for editing a user profile

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
	
 	<div class="input-group">
	 	<span class="input-group-addon"></span>
	 	<input type="text" class="form-control" placeholder="(This will display the user's current username)" aria-describedby="basic-addon1">
	</div>

	<div class="input-group">
	 	<span class="input-group-addon"></span>
	 	<input type="text" class="form-control" placeholder="(And current email)" aria-describedby="basic-addon2">
	</div>

	<div class="input-group">
	 	<span class="input-group-addon"></span>
	 	<input type="text" class="form-control" placeholder="(And current password in password type)" aria-describedby="basic-addon3">
	</div>

	<div class="input-group">
	 	<span class="input-group-addon"></span>
	 	<input type="text" class="form-control" placeholder="(And current description/bio)" aria-describedby="basic-addon4">
	</div>

	<?php include '../views/partials/footer.php' ?>

	<script src="/js/jquery-1.12.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>
 	<script>

 		// this will include any necessary embedded javascript

 	</script>
 </body>
 </html>