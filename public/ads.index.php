<?php

	require '../bootstrap.php';

	$table = $_GET['table'];
	
	$subcat = isset($_GET['subcat']) ? $_GET['subcat'] : '';

	$headline = ucfirst($table);
	


	function pageController($table, $subcat)
	{
		switch ($table) {
			case 'guitars' : 
				if ($subcat != '')
				{
					$data = Guitar::subcat($subcat);
				} else
				{
					$data = Guitar::all();						
				}
				break;

			case 'leather' :
				if (isset($subcat))
				{
					$data = Leather::subcat($subcat);
				} else
				{
					$data = Leather::all();
				}
				break;

			case 'lycra' : 
				if (isset($subcat))
				{
					$data = Lycra::subcat($subcat);
				} else
				{
					$data = Lycra::all();
				}
				break;

			case 'pyrotechnics' : 
				if (isset($subcat))
				{
					$data = Pyrotechnics::subcat($subcat);
				} else
				{
					$data = Pyrotechnics::all();
				}
				break;

			case 'venues' : 
				if (isset($subcat))
				{
					$data = Venues::subcat($subcat);
				} else
				{
					$data = Venues::all();
				}
				break;
		}

		return array('data' => $data);
	}

	extract(pageController($table, $subcat));
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
		<?php if($table == 'guitars') { ?>
		<?php include '../views/partials/gtr_index.php'; ?>
		<?php } ?>

		<?php if($table == 'leather') { ?>
		<?php include '../views/partials/lth_index.php'; ?>
		<?php } ?>

		<?php if($table == 'lycra') { ?>
		<?php include '../views/partials/lyc_index.php'; ?>
		<?php } ?>

		<?php if($table == 'pyrotechnics') { ?>
		<?php include '../views/partials/pyr_index.php'; ?>
		<?php } ?>

		<?php if($table == 'venues') { ?>
		<?php include '../views/partials/ven_index.php'; ?>
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