<?php 

session_start();

require '../bootstrap.php';

if (Auth::isLoggedIn()) {
	// redirect since they're already logged in	
	header("Location: /users.show.php");
	die();
} elseif (Input::has('first_name') && Input::has('last_name') && Input::has('user_name') && Input::has('email') && Input::has('password') && Input::has('band_name') && Input::has('instrument') && Input::has('soul_possession')) {

	$user = new User();

	$user->first_name = Input::get('first_name');
	$user->last_name = Input::get('last_name');
	$user->user_name = Input::get('user_name');
	$user->email = Input::get('email');
	$user->password = Input::get('password');
	$user->bio = Input::get('bio');
	$user->band_name = Input::get('band_name');
	$user->instrument = Input::get('instrument');
	$user->soul_possession = Input::get('soul_possession');

	$user->save();

	header("Location: /auth.login.php");

}

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
 	
 	<form action='' method='post'>
 		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<input type="text" class="form-control" placeholder="First name" name='first_name' aria-describedby="basic-addon1">
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<input type="text" class="form-control" placeholder="Last name" name='last_name' aria-describedby="basic-addon2">
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<input type="text" class="form-control" placeholder="Username" name='user_name' aria-describedby="basic-addon3">
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<input type="text" class="form-control" placeholder="Email" name='email' aria-describedby="basic-addon4">
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<input type="password" class="form-control" placeholder="Password" name='password' aria-describedby="basic-addon5">
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<input type="text" class="form-control" placeholder="Bio/description" name='bio' aria-describedby="basic-addon6">
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<input type="text" class="form-control" placeholder="Band name" name='band_name' aria-describedby="basic-addon6">
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<input type="text" class="form-control" placeholder="Instrument" name='instrument' aria-describedby="basic-addon6">
		</div>

		<input type="radio" name="soul_possession" value=1>Yes<br>
  		<input type="radio" name="soul_possession" value=0>No<br>

		<div class='input-group'>
			<input type='submit' class='form-control' value='Submit'>
		</div>
	</form>

	<?php include '../views/partials/footer.php' ?>

	<script src="/js/jquery-1.12.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>
 	<script>

 		// this will include any necessary embedded javascript

 	</script>

 </body>
 </html>