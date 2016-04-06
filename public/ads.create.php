<?php

	require_once '../bootstrap.php';

	$errors = [];

	if (count($errors) == 0 && Input::has('type') && Input::has('item_description') && Input::has('price') && Input::has('trade') && Input::has('image_url')) {

		$category = Input::get('category');

		if($category == 'guitar') {

			try {
				$type = Input::getString('type');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}
			
			try {
				$brand = Input::getString('brand');
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
				$item_description = Input::getString('item_description');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$price = Input::getNumber('price');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$trade = Input::getNumber('trade');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$image_url = Input::getString('image_url');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			$guitar = new Guitar();
			$guitar->type = Input::get('type');
			$guitar->brand = Input::get('brand');
			$guitar->num_strings = Input::get('num_strings');
			$guitar->num_necks = Input::get('num_necks');
			$guitar->item_description = Input::get('item_description');
			$guitar->price = Input::get('price');
			$guitar->trade = Input::get('trade');
			$guitar->image_url = Input::get('image_url');
			$guitar->save();

		} else if($category == 'leather') {

			try {
				$type = Input::getString('type');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}
			
			try {
				$size = Input::getString('size');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}
			
			try {
				$color = Input::getString('color');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$spikes = Input::getString('spikes');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$item_description = Input::getString('item_description');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$price = Input::getNumber('price');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$trade = Input::getNumber('trade');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$image_url = Input::getString('image_url');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			$leather = new Leather();
			$leather->type = Input::get('type');
			$leather->size = Input::get('size');
			$leather->color = Input::get('color');
			$leather->spikes = Input::get('spikes');
			$leather->item_description = Input::get('item_description');
			$leather->price = Input::get('price');
			$leather->trade = Input::get('trade');
			$leather->image_url = Input::get('image_url');
			$leather->save();

		} else if($category == 'lycra') {

			try {
				$type = Input::getString('type');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}
			
			try {
				$size = Input::getString('size');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}
			
			try {
				$color = Input::getString('color');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$animal_stripe = Input::getString('animal_stripe');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$item_description = Input::getString('item_description');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$price = Input::getNumber('price');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$trade = Input::getNumber('trade');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$image_url = Input::getString('image_url');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			$lycra = new Lycra();
			$lycra->type = Input::get('type');
			$lycra->size = Input::get('size');
			$lycra->color = Input::get('color');
			$lycra->animal_stripe = Input::get('animal_stripe');
			$lycra->item_description = Input::get('item_description');
			$lycra->price = Input::get('price');
			$lycra->trade = Input::get('trade');
			$lycra->image_url = Input::get('image_url');
			$lycra->save();

		} else if($category == 'pyrotechnics') {

			try {
				$type = Input::getString('type');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}
			
			try {
				$brand = Input::getString('brand');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}
			
			try {
				$homemade = Input::getString('homemade');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$casualites = Input::getNumber('casualites');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$item_description = Input::getString('item_description');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$price = Input::getNumber('price');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$trade = Input::getNumber('trade');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$image_url = Input::getString('image_url');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			$pyrotechnics = new Pyrotechnics();
			$pyrotechnics->type = Input::get('type');
			$pyrotechnics->brand = Input::get('brand');
			$pyrotechnics->homemade = Input::get('homemade');
			$pyrotechnics->casualites = Input::get('casualites');
			$pyrotechnics->item_description = Input::get('item_description');
			$pyrotechnics->price = Input::get('price');
			$pyrotechnics->trade = Input::get('trade');
			$pyrotechnics->image_url = Input::get('image_url');
			$pyrotechnics->save();

		} else if($category == 'venues') {

			try {
				$type = Input::getString('type');
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
				$item_description = Input::getString('item_description');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$price = Input::getNumber('price');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$trade = Input::getNumber('trade');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			try {
				$image_url = Input::getString('image_url');
			} catch (Exception $e) {
				$errors[] = $e->getMessage();
			}

			$venues = new Venues();
			$venues->type = Input::get('type');
			$venues->capacity = Input::get('capacity');
			$venues->lighting = Input::get('homemade');
			$venues->pa_systems = Input::get('casualites');
			$venues->beverages = Input::get('beverages');
			$venues->item_description = Input::get('item_description');
			$venues->price = Input::get('price');
			$venues->trade = Input::get('trade');
			$venues->image_url = Input::get('image_url');
			$venues->save();
		}
	}

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
					<li id="hidden_field"></li>
				</ul>
			</div>
		</div>

		<form method="POST">
			<div id="guitars">
				<input name="category" type="text" value="guitar" class="hidden">
				<h2 class='headline'>Guitars</h2>
				<hr>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="btn-group">
						<button type="button" class="btn btn-default">Guitar Type</button>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Flying V's</a></li>
							<li><a href="#">Random Pointy</a></li>
							<li><a href="#">Generally Scary</a></li>
							<li><a href="#">Novelty</a></li>
						</ul>
						</div>
						<div class="input-group">
							<span class="input-group-addon">Brand</span>
							<input type="text" class="form-control" aria-label="Screen name displayed to public">
						</div>

						<div class="input-group">
							<span class="input-group-addon">No. of Strings</span>
							<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
						</div>

						<div class="input-group">
							<span class="input-group-addon">No. of Necks</span>
							<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Item Description</h3>
							</div>
							<div class="panel-body">
								<input type="text">
							</div>
						</div>

						<div class="price">
							<div class="input-group">
								<span class="input-group-addon">$</span>
								<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
								<span class="input-group-addon">.00</span>
							</div>
							<div class="input-group">
							<span class="input-group-addon">
							  <input type="radio" aria-label="...">
							</span>
							<span class="input-group-addon" id="basic-addon1">Trade?</span>
							<input type="text" class="form-control" aria-label="...">
							</div><!-- /input-group -->
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div>
				</div>
			</div> <!-- end of guitar div -->

			<div id="leather">
				<input name="category" type="text" value="leather" class="hidden">
				<h2 class='headline'>Leather</h2>
				<hr>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="btn-group">
						<button type="button" class="btn btn-default">Garment Type</button>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Pants</a></li>
							<li><a href="#">Vests</a></li>
							<li><a href="#">Greaves / Boots</a></li>
							<li><a href="#">Codpieces</a></li>
						</ul>
					</div>

					<div class="input-group">
						<span class="input-group-addon">Size</span>
						<input type="text" class="form-control" aria-label="Screen name displayed to public">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Colors</span>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Spikes? Studs? Fancy Buttons?</span>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="price">
						<div class="input-group">
							<span class="input-group-addon">$</span>
							<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
							<span class="input-group-addon">.00</span>
						</div>
						<div class="input-group">
						<span class="input-group-addon">
						  <input type="radio" aria-label="...">
						</span>
						<span class="input-group-addon" id="basic-addon1">Trade?</span>
						<input type="text" class="form-control" aria-label="...">
						</div><!-- /input-group -->
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>

			</div> <!-- end of leather class -->

			<div id="lycra">
				<input name="category" type="text" value="lycra" class="hidden">
				<h2 class='headline'>Lycra</h2>
				<hr>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="btn-group">
						<button type="button" class="btn btn-default">Garment Type</button>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Pants</a></li>
							<li><a href="#">Vests</a></li>
							<li><a href="#">Gloves</a></li>
							<li><a href="#">Unisuits</a></li>
						</ul>
					</div>

					<div class="input-group">
						<span class="input-group-addon">Size</span>
						<input type="text" class="form-control" aria-label="Screen name displayed to public">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Colors</span>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Animal stripe pattern?</span>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="price">
						<div class="input-group">
							<span class="input-group-addon">$</span>
							<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
							<span class="input-group-addon">.00</span>
						</div>
						<div class="input-group">
						<span class="input-group-addon">
						  <input type="radio" aria-label="...">
						</span>
						<span class="input-group-addon" id="basic-addon1">Trade?</span>
						<input type="text" class="form-control" aria-label="...">
						</div><!-- /input-group -->
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>

			</div> <!-- end of lycra class -->

			<div id="pyro">
				<input name="category" type="text" value="pyro" class="hidden">
				<h2 class='headline'>Pyrotechnics</h2>
				<hr>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="btn-group">
						<button type="button" class="btn btn-default">Impliment Type</button>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Smokepot</a></li>
							<li><a href="#">Concussion</a></li>
							<li><a href="#">Fireballs</a></li>
							<li><a href="#">Flame Projectors</a></li>
						</ul>
					</div>

					<div class="input-group">
						<span class="input-group-addon">Brand</span>
						<input type="text" class="form-control" aria-label="Screen name displayed to public">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Homemade?</span>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Casulties?</span>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="price">
						<div class="input-group">
							<span class="input-group-addon">$</span>
							<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
							<span class="input-group-addon">.00</span>
						</div>
						<div class="input-group">
						<span class="input-group-addon">
						  <input type="radio" aria-label="...">
						</span>
						<span class="input-group-addon" id="basic-addon1">Trade?</span>
						<input type="text" class="form-control" aria-label="...">
						</div><!-- /input-group -->
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>

			</div> <!-- end of lycra class -->

			<div id="venue">
				<input name="category" type="text" value="venue" class="hidden">				
				<h2 class='headline'>Venues</h2>
				<hr>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="btn-group">
						<button type="button" class="btn btn-default">Venue Type</button>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Outdoor</a></li>
							<li><a href="#">Dive Bar</a></li>
							<li><a href="#">Abandoned Buildings</a></li>
							<li><a href="#">Someone's Basement</a></li>
						</ul>
					</div>

					<div class="input-group">
						<span class="input-group-addon">Capacity</span>
						<input type="text" class="form-control" aria-label="Screen name displayed to public">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Lighting</span>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="input-group">
						<span class="input-group-addon">PA System</span>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="input-group">
						<span class="input-group-addon">Beverages?</span>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
					</div>

					<div class="price">
						<div class="input-group">
							<span class="input-group-addon">$</span>
							<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
							<span class="input-group-addon">.00</span>
						</div>
						<div class="input-group">
						<span class="input-group-addon">
						  <input type="radio" aria-label="...">
						</span>
						<span class="input-group-addon" id="basic-addon1">Trade?</span>
						<input type="text" class="form-control" aria-label="...">
						</div><!-- /input-group -->
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>

			</div> <!-- end of lycra class -->
		</form>



	</main>

	<?php include '../views/partials/footer.php' ?>

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

			// set my event listeners

				$(document).ready(function() {
					$('#tgr_gtr').click(function() {
					  $('#hidden_field').html('tgr_gtr');
					  $(gtr).slideDown();
					  $(lth).hide();
					  $(lyc).hide();
					  $(pyr).hide();
					  $(ven).hide();
					});
					$('#tgr_lth').click(function() {
  					  $('#hidden_field').html('tgr_lth');
  					  $(gtr).hide();
					  $('#leather').slideDown();
					  $(lyc).hide();
					  $(pyr).hide();
					  $(ven).hide();
					});
					$('#tgr_lyc').click(function() {
  					  $('#hidden_field').html('tgr_lyc');
  					  $(gtr).hide();
					  $(lth).hide();
					  $('#lycra').slideDown();
					  $(pyr).hide();
					  $(ven).hide();
					});
					$('#tgr_pyr').click(function() {
  					  $('#hidden_field').html('tgr_pyr');
  					  $(gtr).hide();
					  $(lth).hide();
					  $(lyc).hide();
					  $('#pyro').slideDown();
					  $(ven).hide();
					});
					$('#tgr_ven').click(function() {
  					  $('#hidden_field').html('tgr_ven');
  					  $(gtr).hide();
					  $(lth).hide();
					  $(lyc).hide();
					  $(pyr).hide();
					  $('#venue').slideDown();
					});
				});

 	</script>
 </body>
 </html>