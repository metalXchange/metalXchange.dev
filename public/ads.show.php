<?php

	session_start();
	require '../bootstrap.php';

	$table = $_GET['table'];
	$id = $_GET['id'];

	function pageController($table, $id) {

		$temp = [];

		if (Input::has('delete')) {

			switch ($table) {
			case 'guitars' : 
				$itemDisplay = Guitar::delete($id);
				break;
			case 'leather' : 
				$itemDisplay = Leather::delete($id);
				break;
			case 'lycra' : 
				$itemDisplay = Lycra::delete($id);
				break;
			case 'pyrotechnics' : 
				$itemDisplay = Pyrotechnics::delete($id);
				break;
			case 'venues' : 
				$itemDisplay = Venues::delete($id);
				break;
			}

			header('Location: /users.show.php');
			die();
		}


		if (Auth::isLoggedIn())	{

			$user_id = $_SESSION['LOGGED_IN_USER_ID'];
			
			switch ($table) {
			case 'guitars' : 
				$ad = Guitar::find($id);
				break;
			case 'leather' : 
				$ad = Leather::find($id);
				break;
			case 'lycra' : 
				$ad = Lycra::find($id);
				break;
			case 'pyrotechnics' : 
				$ad = Pyrotechnics::find($id);
				break;
			case 'venues' : 
				$ad = Venues::find($id);
				break;
			}			

			if ($user_id == $ad->user_id) {
				$temp['authenticate'] = true;
			}
		}	


		$itemDisplay = [];
		switch ($table) {
			case 'guitars' : 
				$itemDisplay = Guitar::find($id);
				break;
			case 'leather' : 
				$itemDisplay = Leather::find($id);
				break;
			case 'lycra' : 
				$itemDisplay = Lycra::find($id);
				break;
			case 'pyrotechnics' : 
				$itemDisplay = Pyrotechnics::find($id);
				break;
			case 'venues' : 
				$itemDisplay = Venues::find($id);
				break;
		}
		
		$temp['item'] = $itemDisplay;

		return $temp;
	}

	extract(pageController($table, $id));

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

	<?php if($table == 'guitars') { ?>
	<?php include '../views/partials/gtr_show.php'; ?>
	<?php } ?>

	<?php if($table == 'leather') { ?>
	<?php include '../views/partials/lth_show.php'; ?>
	<?php } ?>

	<?php if($table == 'lycra') { ?>
	<?php include '../views/partials/lyc_show.php'; ?>
	<?php } ?>

	<?php if($table == 'pyrotechnics') { ?>
	<?php include '../views/partials/pyr_show.php'; ?>
	<?php } ?>

	<?php if($table == 'venues') { ?>
	<?php include '../views/partials/ven_show.php'; ?>
	<?php } ?>

	<a href="/ads.create.php?table=<?=$table?>&id=<?=$id?>"><span class="badge">Edit Ad</span></a>
	<?php if (isset($authenticate)) { ?>
		<a href="/ads.show.php?table=<?=$table?>&id=<?=$id?>&delete=1"><span class="badge">Delete Ad</span></a>
	<?php } ?>
		<hr></a>

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