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


<main>

 	<form action='' method='post'>
 		<div class="input-group">
			<span class="input-group-addon"></span>
			<input name="first_name" type="text" placeholder="First Name" class="form-control" aria-label="Descriptive Headline">
		</div>

		<div class="input-group">
			<span class="input-group-addon"></span>
			<input name="last_name" type="text" placeholder="Last Name" class="form-control" aria-label="Descriptive Headline">
		</div>

		<div class="input-group">
			<span class="input-group-addon"></span>
			<input name="user_name" type="text" placeholder="Username" class="form-control" aria-label="Descriptive Headline">
		</div>

		<div class="input-group">
			<span class="input-group-addon"></span>
			<input name="email" type="text" placeholder="Email" class="form-control" aria-label="Descriptive Headline">
		</div>

		<div class="input-group">
			<span class="input-group-addon"></span>
			<input name="password" type="password" placeholder="Password" class="form-control" aria-label="Descriptive Headline">
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<input type="text" class="form-control" placeholder="Bio/description" name='bio' aria-describedby="basic-addon6">
		</div>

		<div class="input-group">
			<span class="input-group-addon"></span>
			<input name="band_name" type="text" placeholder="Band Name" class="form-control" aria-label="Descriptive Headline">
		</div>

		<div class="input-group">
			<span class="input-group-addon"></span>
			<input name="instrument" type="text" placeholder="Instrument" class="form-control" aria-label="Descriptive Headline">
		</div>

		<input type="radio" name="soul_possession" value=1>Yes<br>
  		<input type="radio" name="soul_possession" value=0>No<br>

		<div class='input-group'>
			<input type='submit' class='form-control' value='Submit'>
		</div>
	</form>
</main>

	<?php include '../views/partials/footer.php' ?>

	<script src="/js/jquery-1.12.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>
 	<script>

 		// this will include any necessary embedded javascript

 	</script>

 </body>
 </html>