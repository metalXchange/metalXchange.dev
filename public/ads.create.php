<?php

	session_start();

	require_once '../bootstrap.php';

	if (!Auth::isLoggedIn()) {
	header("Location: /users.show.php");
	die();
	}

	$category = "";
	if (Input::has('table')) {
		$category = Input::get('table');
		$id = Input::get('id');
	}

	$guitar = new Guitar();
	$leather = new Leather();
	$lycra = new Lycra();
	$pyrotechnics = new Pyrotechnics();
	$venues = new Venues();

	if($category == 'guitars')
	{
		$guitar = Guitar::find($id);
	} elseif ($category == 'leathers')
	{
		$guitar = Leather::find($id);
	} elseif ($category == 'lycra')
	{
		$guitar = Lycra::find($id);
	} elseif ($category == 'pyrotechnics')
	{
		$guitar = Pyrotechnics::find($id);
	} elseif ($category == 'venues')
	{
		$guitar = Venues::find($id);
	}

	$errors = [];

	// var_dump($guitar);
			
	if($_POST && $category == 'guitars') {

		try {
			$type = Input::getString('gtr_type');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$type = Input::getString('gtr_hdln');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$brand = Input::getString('gtr_brand');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$num_strings = Input::getNumber('num_strings');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$num_necks = Input::getNumber('num_necks');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$item_description = Input::getString('gtr_description');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$price = Input::getNumber('gtr_price');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$trade = Input::getNumber('gtr_trade');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$trade = Input::getNumber('gtr_trade_desc');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		var_dump($errors);

		if (empty($errors)) {
			$guitar->user_id = $_SESSION['LOGGED_IN_USER_ID'];
			$guitar->type = Input::get('gtr_type');
			$guitar->headline = Input::get('gtr_hdln');
			$guitar->brand = Input::get('gtr_brand');
			$guitar->num_strings = Input::get('num_strings');
			$guitar->num_necks = Input::get('num_necks');
			$guitar->item_description = Input::get('gtr_description');
			$guitar->price = Input::get('gtr_price');
			$guitar->trade = Input::get('gtr_trade');
			$guitar->trade_desc = Input::get('gtr_trade_desc');
			$guitar->image_url = Guitar::uploadFile();
			$guitar->save();
		}

	} else if($_POST && $category == 'leather') {

		try {
			$type = Input::getString('lth_type');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$type = Input::getString('lth_hdln');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$size = Input::getString('lth_size');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$color = Input::getString('lth_color');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$spikes = Input::getString('spikes');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$item_description = Input::getString('lth_description');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$price = Input::getNumber('lth_price');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$trade = Input::getNumber('lth_trade');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		$leather->user_id = $_SESSION['LOGGED_IN_USER_ID'];
		$leather->type = Input::get('lth_type');
		$leather->headline = Input::get('lth_hdln');
		$leather->size = Input::get('lth_size');
		$leather->color = Input::get('lth_color');
		$leather->spikes = Input::get('spikes');
		$leather->item_description = Input::get('lth_description');
		$leather->price = Input::get('lth_price');
		$leather->trade = Input::get('lth_trade');
		$leather->trade_desc = Input::get('lth_trade_desc');
		$leather->image_url = Leather::uploadFile();
		$leather->save();

	} else if($_POST && $category == 'lycra') {

		try {
			$type = Input::getString('lyc_type');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$type = Input::getString('lyc_hdln');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$size = Input::getString('lyc_size');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$color = Input::getString('lyc_color');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$animal_stripe = Input::getString('animal_stripe');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$item_description = Input::getString('lyc_description');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$price = Input::getNumber('lyc_price');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$trade = Input::getNumber('lyc_trade');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		$lycra->user_id = $_SESSION['LOGGED_IN_USER_ID'];
		$lycra->type = Input::get('lyc_type');
		$lycra->headline = Input::get('lyc_hdln');
		$lycra->size = Input::get('lyc_size');
		$lycra->color = Input::get('lyc_color');
		$lycra->animal_stripe = Input::get('animal_stripe');
		$lycra->item_description = Input::get('lyc_description');
		$lycra->price = Input::get('lyc_price');
		$lycra->trade = Input::get('lyc_trade');
		$lycra->trade_desc = Input::get('lyc_trade_desc');
		$lycra->image_url = Lycra::uploadFile();
		$lycra->save();

	} else if($_POST && $category == 'pyrotechnics') {

		try {
			$type = Input::getString('pyr_type');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$type = Input::getString('pyr_hdln');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$brand = Input::getString('pyr_brand');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$homemade = Input::getString('homemade');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$casualites = Input::getString('casualties');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$item_description = Input::getString('pyr_description');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$price = Input::getNumber('pyr_price');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$trade = Input::getNumber('pyr_trade');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		$pyrotechnics->user_id = $_SESSION['LOGGED_IN_USER_ID'];
		$pyrotechnics->type = Input::get('pyr_type');
		$pyrotechnics->headline = Input::get('pyr_hdln');
		$pyrotechnics->brand = Input::get('pyr_brand');
		$pyrotechnics->homemade = Input::get('homemade');
		$pyrotechnics->casualties = Input::get('casualties');
		$pyrotechnics->item_description = Input::get('pyr_description');
		$pyrotechnics->price = Input::get('pyr_price');
		$pyrotechnics->trade = Input::get('pyr_trade');
		$pyrotechnics->trade_desc = Input::get('pyr_trade_desc');
		$pyrotechnics->image_url = Pyrotechnics::uploadFile();
		$pyrotechnics->save();

	} else if($_POST && $category == 'venues') {

		try {
			$type = Input::getString('ven_type');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$type = Input::getString('ven_hdln');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		try {
			$capacity = Input::getString('capacity');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$lighting = Input::getString('lighting');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$pa_systems = Input::getString('pa_systems');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$beverages = Input::getString('beverages');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$item_description = Input::getString('ven_description');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$price = Input::getNumber('ven_price');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$trade = Input::getNumber('ven_trade');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		try {
			$trade = Input::getNumber('ven_trade_desc');
		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

		$venues->user_id = $_SESSION['LOGGED_IN_USER_ID'];
		$venues->type = Input::get('ven_type');
		$venues->headline = Input::get('ven_hdln');
		$venues->capacity = Input::get('capacity');
		$venues->lighting = Input::get('homemade');
		$venues->pa_systems = Input::get('pa_systems');
		$venues->beverages = Input::get('beverages');
		$venues->item_description = Input::get('ven_description');
		$venues->price = Input::get('ven_price');
		$venues->trade = Input::get('ven_trade');
		$venues->trade_desc = Input::get('ven_trade_desc');
		$venues->image_url = Venues::uploadFile();
		$venues->save();
	}

	// var_dump($guitar);

	// var_dump($guitar->headline);

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
		<h1 class='headline'>Add an Item for Sale/Trade</h1>
		<div class="container">
			<div class="btn-group">
				<button type="button" class="btn btn-default">Gear Type</button>
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu">
					<li><a id="tgr_gtr" href="#">Guitars</a></li>
					<li><a id="tgr_lth" href="#">Leather</a></li>
					<li><a id="tgr_lyc" href="#">Lycra</a></li>
					<li><a id="tgr_pyr" href="#">Pyrotechnics</a></li>
					<li><a id="tgr_ven" href="#">Venue</a></li>
<!-- 					<li id="hidden_field"></li>
 -->				</ul>
			</div>
		</div>

<!-- 		<form method="post">
 -->		<form action="ads.create.php" method="post" enctype="multipart/form-data">
			 <!-- DO NOT DELETE LINE BELOW!!! -->
 			<input type="text" hidden name="category" class="hidden" value="<?= $category ?>" id="category">
			<div id="guitars">
				<h2 class='headline'>Guitars</h2>
				<hr>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div>
						<label for="gtr_type">Types of Guitar</label>
						<select name="gtr_type">
						  <option disabled selected>- select type -</option>
						  <option value="Flying V's">Flying V's</option>
						  <option value="Random Pointy">Random Pointy</option>
						  <option value="Generally Scary">Generally Scary</option>
						  <option value="Novelty">Novelty</option>
						</select>
					</div>

						<div class="input-group">
							<span class="input-group-addon">Headline</span>
							<input name="gtr_hdln" type="text" value="<?= $guitar->headline ?>" class="form-control" aria-label="Descriptive Headline">
						</div>

						<div class="input-group">
							<span class="input-group-addon">Brand</span>
							<input name="gtr_brand" type="text" value="<?= $guitar->brand ?>" class="form-control" aria-label="Screen name displayed to public">
						</div>

						<div class="input-group">
							<span class="input-group-addon">No. of Strings</span>
							<input name="num_strings" type="text" value="<?= $guitar->num_strings ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
						</div>

						<div class="input-group">
							<span class="input-group-addon">No. of Necks</span>
							<input name="num_necks" type="text" value="<?= $guitar->num_necks ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Item Description</h3>
							</div>
							<div class="panel-body">
								<input name="gtr_description" type="text" value="<?= $guitar->item_description ?>">
							</div>
						</div>

						<div class="input-group">
							<span class="input-group-addon">Image</span>
							<input name="gtr_url" type="text" value="<?= $guitar->image_url ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
						</div>

						<div class="price">
							<div class="input-group">
								<span class="input-group-addon">$</span>
								<input name="gtr_price" type="text" value="<?= $guitar->price ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
								<span class="input-group-addon">.00</span>
							</div>
							<div class="input-group">
								<span class="input-group-addon">
									<input name="gtr_trade" type="radio" aria-label="..." value="<?= $guitar->trade ?>">
								</span>
								<span class="input-group-addon" id="basic-addon1">Trade?</span>
								<input name="gtr_trade_desc" type="text" value="<?= $guitar->trade_desc ?>" class="form-control" aria-label="...">
							</div><!-- /input-group -->
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div>
				</div>
			</div> <!-- end of guitar div -->

			<div id="leather">
				<h2 class='headline'>Leather</h2>
				<hr>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div>
						<label for="lth_type">Types of Leather Garments</label>
						<select name="lth_type">
						 	<option disabled selected>- select type -</option>
						 	<option value="Pants">Pants</option>
						 	<option value="Vests">Vests</option>
						 	<option value="Greaves / Boots">Greaves / Boots</option>
						 	<option value="Codpieces">Codpieces</option>
						</select>
					</div>

					<div class="input-group">
						<span class="input-group-addon">Headline</span>
						<input name="lth_hdln" type="text" value="<?= isset($leather->headline) ? $leather->headline : '' ?>" class="form-control" aria-label="Descriptive Headline">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Size</span>
						<input name="lth_size" type="text" value="<?= isset($leather->size) ? $leather->size : '' ?>" class="form-control" aria-label="Screen name displayed to public">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Color</span>
						<input name="lth_color" type="text" value="<?= isset($leather->color) ? $leather->color : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Spikes?</span>
						<input name="spikes" type="text" value="<?= isset($leather->spikes) ? $leather->spikes : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Item Description</h3>
						</div>
						<div class="panel-body">
							<input name="lth_description" type="text" value="<?= isset($leather->item_description) ? $leather->item_description : '' ?>">
						</div>
					</div>

					<div class="price">
						<div class="input-group">
							<span class="input-group-addon">$</span>
							<input name="lth_price" type="text" value="<?= isset($leather->price) ? $leather->price : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
							<span class="input-group-addon">.00</span>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
								<input name="lth_trade" type="radio" aria-label="..." value="<?= isset($leather->trade) ? $leather->trade : '' ?>">
							</span>
							<span class="input-group-addon" id="basic-addon1">Trade?</span>
							<input name="lth_trade_desc" type="text" value="<?= isset($leather->trade_desc) ? $leather->trade_desc : '' ?>" class="form-control" aria-label="...">
						</div><!-- /input-group -->
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>

			</div> <!-- end of leather div -->

			<div id="lycra">
				<h2 class='headline'>Lycra</h2>
				<hr>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div>
						<label for="lyc_type">Types of Lycra Garments</label>
						<select name="lyc_type">
							<option disabled selected>- select type -</option>
						 	<option value="Pants">Pants</option>
						 	<option value="Vests">Vests</option>
						 	<option value="Gloves">Gloves</option>
							<option value="Unisuits">Unisuits</option>
						</select>
					</div>

					<div class="input-group">
						<span class="input-group-addon">Headline</span>
						<input name="lyc_hdln" type="text" value="<?= isset($lycra->headline) ? $lycra->headline : '' ?>" class="form-control" aria-label="Descriptive Headline">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Size</span>
						<input name="lyc_size" type="text" value="<?= isset($lycra->size) ? $lycra->size : '' ?>" class="form-control" aria-label="Screen name displayed to public">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Color</span>
						<input name="lyc_color" type="text" value="<?= isset($lycra->color) ? $lycra->color : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Animal stripe pattern?</span>
						<input name="animal_stripe" type="text" value="<?= isset($lycra->animal_stripe) ? $lycra->animal_stripe : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Item Description</h3>
						</div>
						<div class="panel-body">
							<input name="lyc_description" type="text" value="<?= isset($lycra->item_description) ? $lycra->item_description : '' ?>">
						</div>
					</div>

					<div class="price">
						<div class="input-group">
							<span class="input-group-addon">$</span>
							<input name="lyc_price" type="text" value="<?= isset($lycra->price) ? $lycra->price : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
							<span class="input-group-addon">.00</span>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
								<input name="lyc_trade" type="radio" aria-label="..." value="<?= isset($lycra->trade) ? $lycra->trade : '' ?>">
							</span>
							<span class="input-group-addon" id="basic-addon1">Trade?</span>
							<input name="lyc_trade_desc" type="text" value="<?= isset($lycra->trade_desc) ? $lycra->trade_desc : '' ?>" class="form-control" aria-label="...">
						</div><!-- /input-group -->
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>

			</div> <!-- end of lycra div -->

			<div id="pyro">
				<h2 class='headline'>Pyrotechnics</h2>
				<hr>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div>
						<label for="pyr_type">Types of Implements</label>
						<select name="pyr_type">
							<option disabled selected>- select type -</option>
							<option value="Smokepot">Smokepot</option>
						 	<option value="Concussion">Concussion</option>
						 	<option value="Fireballs">Fireballs</option>
						 	<option value="Flame Projectors">Flame Projectors</option>
						</select>
					</div>

					<div class="input-group">
						<span class="input-group-addon">Headline</span>
						<input name="pyr_hdln" type="text" value="<?= isset($pyrotechnics->headline) ? $pyrotechnics->headline : '' ?>" class="form-control" aria-label="Descriptive Headline">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Brand</span>
						<input name="pyr_brand" type="text" value="<?= isset($pyrotechnics->brand) ? $pyrotechnics->brand : '' ?>" class="form-control" aria-label="Screen name displayed to public">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Homemade?</span>
						<input name="homemade" type="text" value="<?= isset($pyrotechnics->homemade) ? $pyrotechnics->homemade : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Casulties?</span>
						<input name="casualties" type="text" value="<?= isset($pyrotechnics->casualties) ? $pyrotechnics->casualties : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Item Description</h3>
						</div>
						<div class="panel-body">
							<input name="pyr_description" type="text" value="<?= isset($pyrotechnics->item_description) ? $pyrotechnics->item_description : '' ?>">
						</div>
					</div>

					<div class="price">
						<div class="input-group">
							<span class="input-group-addon">$</span>
							<input name="pyr_price" type="text" value="<?= isset($pyrotechnics->price) ? $pyrotechnics->price : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
							<span class="input-group-addon">.00</span>
						</div>
						<div class="input-group">
						<span class="input-group-addon">
						  <input name="pyr_trade" type="radio" aria-label="..." value="<?= isset($pyrotechnics->trade) ? $pyrotechnics->trade : '' ?>">
						</span>
						<span class="input-group-addon" id="basic-addon1">Trade?</span>
							<input name="pyr_trade_desc" type="text" value="<?= isset($pyrotechnics->trade_desc) ? $pyrotechnics->trade_desc : '' ?>" class="form-control" aria-label="...">
						</div><!-- /input-group -->
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>

			</div> <!-- end of pyrotechnics div -->

			<div id="venue">
				<h2 class='headline'>Venues</h2>
				<hr>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div>
						<label for="ven_type">Types of Venues</label>
						<select name="ven_type">
							<option disabled selected>- select type -</option>
						 	<option value="Outdoor">Outdoor</option>
							<option value="Dive Bar">Dive Bar</option>
							<option value="Abandoned Buildings">Abandoned Buildings</option>
							<option value="Someone's Basement">Someone's Basement</option>
						</select>
					</div>

					<div class="input-group">
						<span class="input-group-addon">Headline</span>
						<input name="ven_hdln" type="text" value="<?= isset($venue->headline) ? $venue->headline : '' ?>" class="form-control" aria-label="Descriptive Headline">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Capacity</span>
						<input name="capacity" type="text" value="<?= isset($venue->capacity) ? $venue->capacity : '' ?>" class="form-control" aria-label="Screen name displayed to public">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Lighting</span>
						<input name="lighting" type="text" value="<?= isset($venue->lighting) ? $venue->lighting : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="input-group">
						<span class="input-group-addon">PA System</span>
						<input name="pa_systems" type="text" value="<?= isset($venue->pa_systems) ? $venue->pa_systems : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Beverages?</span>
						<input name="beverages" type="text" value="<?= isset($venue->beverages) ? $venue->beverages : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Item Description</h3>
						</div>
						<div class="panel-body">
							<input name="ven_description" type="text" value="<?= isset($venue->item_description) ? $venue->item_description : '' ?>">
						</div>
					</div>

					<div class="price">
						<div class="input-group">
							<span class="input-group-addon">$</span>
							<input name="ven_price" type="text" value="<?= isset($venue->price) ? $venue->price : '' ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
							<span class="input-group-addon">.00</span>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
								<input name="ven_trade" type="radio" aria-label="..." value="<?= isset($venue->trade) ? $venue->trade : '' ?>">
							</span>
							<span class="input-group-addon" id="basic-addon1">Trade?</span>
							<input name="ven_trade_desc" type="text" value="<?= isset($venue->trade_desc) ? $venue->trade_desc : '' ?>" class="form-control" aria-label="...">
						</div><!-- /input-group -->
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>

			</div> <!-- end of lycra class -->

			<div id="fileUpload">
				Select image to upload:
			    <input type="file" name="image_url">
<!-- 			    <input type="submit" value="Upload Image" name="submit">
 -->		    </div>
		</form>

	</main>

<!-- 	<?php include '../views/partials/footer.php' ?>
 -->
	<script src="/js/jquery-1.12.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>
 	<script>
 		"use strict";

			var gtr = $("#guitars");
			var lth = $("#leather");
			var lyc = $("#lycra");
			var pyr = $("#pyro");
			var ven = $("#venue");
			var iu = $("#fileUpload")

			// set my event listeners

				$(document).ready(function() {
					$('#tgr_gtr').click(function() {
					  $('.hidden').val('guitars');
					  $(gtr).slideDown();
					  $(lth).hide();
					  $(lyc).hide();
					  $(pyr).hide();
					  $(ven).hide();
					  $(iu).slideDown();
					});
					$('#tgr_lth').click(function() {
  					  $('.hidden').val('leather');
  					  $(gtr).hide();
					  $('#leather').slideDown();
					  $(lyc).hide();
					  $(pyr).hide();
					  $(ven).hide();
					  $(iu).slideDown();
					});
					$('#tgr_lyc').click(function() {
  					  $('.hidden').val('lycra');
  					  $(gtr).hide();
					  $(lth).hide();
					  $('#lycra').slideDown();
					  $(pyr).hide();
					  $(ven).hide();
					  $(iu).slideDown();
					});
					$('#tgr_pyr').click(function() {
  					  $('.hidden').val('pyrotechnics');
  					  $(gtr).hide();
					  $(lth).hide();
					  $(lyc).hide();
					  $('#pyro').slideDown();
					  $(ven).hide();
					  $(iu).slideDown();
					});
					$('#tgr_ven').click(function() {
  					  $('.hidden').val('venues');
  					  $(gtr).hide();
					  $(lth).hide();
					  $(lyc).hide();
					  $(pyr).hide();
					  $('#venue').slideDown();
					  $(iu).slideDown();
					});
				});

		var category = $('#category').val();
		if (category == 'guitars') {
			$('.hidden').val('guitars');
			$(gtr).slideDown();
			$(lth).hide();
		 	$(lyc).hide();
			$(pyr).hide();
			$(ven).hide();
			$(iu).slideDown();
		} else if (category == 'leather') {
			$('.hidden').val('leather');
			$(gtr).hide();
			$('#leather').slideDown();
			$(lyc).hide();
			$(pyr).hide();
			$(ven).hide();
			$(iu).slideDown();
		} else if (category == 'lycra') {
			$('.hidden').val('lycra');
			$(gtr).hide();
			$(lth).hide();
			$('#lycra').slideDown();
			$(pyr).hide();
			$(ven).hide();
			$(iu).slideDown();
		} else if (category == 'pyrotechnics') {
			$('.hidden').val('pyrotechnics');
			$(gtr).hide();
			$(lth).hide();
			$(lyc).hide();
			$('#pyro').slideDown();
			$(ven).hide();
			$(iu).slideDown();
		} else if (category == 'venues') {
			$('.hidden').val('venues');
			$(gtr).hide();
			$(lth).hide();
			$(lyc).hide();
			$(pyr).hide();
			$('#venue').slideDown();
			$(iu).slideDown();
		};

 	</script>
 </body>
 </html>