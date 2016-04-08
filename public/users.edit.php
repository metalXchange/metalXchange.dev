<?php 

	session_start();
	require_once '../bootstrap.php';


	function pageController() {

		if(!AUTH::isLoggedIn())
		{
			header('Location: /auth.login.php');
			die();
		} elseif (Input::has('first_name') && Input::has('last_name') && Input::has('user_name') && Input::has('email') && Input::has('password') && Input::has('band_name') && Input::has('instrument') && Input::has('soul_possession')) {

			$user = User::findUserByUsername(Auth::getUsername());


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
			die();

		}

		$user_id = $_SESSION['LOGGED_IN_USER_ID'];

		$profile = User::find($user_id);
		return $profile;
	}

	extract(pageController());
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
		 	<textarea type="text" class="form-control" name='first_name' aria-describedby="basic-addon4"><?= $first_name ?></textarea> 
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<textarea type="text" class="form-control" name='last_name' aria-describedby="basic-addon4"><?= $last_name ?></textarea> 
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<textarea type="text" class="form-control" name='user_name' aria-describedby="basic-addon4"><?= $user_name ?></textarea> 
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<textarea type="text" class="form-control" name='email' aria-describedby="basic-addon4"><?= $email ?></textarea> 
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<textarea type="password" class="form-control" name='password' aria-describedby="basic-addon4"><?= $password ?></textarea> 
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<textarea type="text" class="form-control" name='band_name' aria-describedby="basic-addon4"><?= $band_name ?></textarea> 
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<textarea type="text" class="form-control" name='instrument' aria-describedby="basic-addon4"><?= $instrument ?></textarea> 
		</div>

		<div class="input-group">
		 	<span class="input-group-addon"></span>
		 	<textarea type="text" class="form-control" name='bio' aria-describedby="basic-addon4"><?= $bio ?></textarea> 
		</div>

		<input type="radio" name="soul_possession" value=1 <?php if ($soul_possession == 1) {echo 'checked ';} ?>>Yes<br>
  		<input type="radio" name="soul_possession" value=0 <?php if ($soul_possession == 0) {echo 'checked ';} ?>>No<br>

		<div class='input-group'>
			<input type='submit' class='form-control' value='Submit'>
		</div>
		
	</form>

	<!-- include '../views/partials/footer.php' -->

	<script src="/js/jquery-1.12.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>
 	<script>

 		// this will include any necessary embedded javascript

 	</script>
 </body>
 </html>