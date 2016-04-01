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
 </head>
 <body>
	<?php include '../views/partials/header.php' ?>
	<?php include '../views/partials/navbar.php' ?>

	<main>
		<h2 class='headline'>Add an Item for Sale/Trade</h2>
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
				</ul>
			</div>
		</div>

			
			<div id="guitars">
				<h3 class='subhead'>Guitars</h3>
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
			</div> <!-- end of guitar class -->

			<div id="leather">
				<h3 class='subhead'>Leather</h3>
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
				<h3 class='subhead'>Lycra</h3>
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
				<h3 class='subhead'>Pyrotechnics</h3>
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
				<h3 class='subhead'>Venues</h3>
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
					  $(gtr).slideDown();
					  $(lth).hide();
					  $(lyc).hide();
					  $(pyr).hide();
					  $(ven).hide();
					});
					$('#tgr_lth').click(function() {
  					  $(gtr).hide();
					  $('#leather').slideDown();
					  $(lyc).hide();
					  $(pyr).hide();
					  $(ven).hide();
					});
					$('#tgr_lyc').click(function() {
  					  $(gtr).hide();
					  $(lth).hide();
					  $('#lycra').slideDown();
					  $(pyr).hide();
					  $(ven).hide();
					});
					$('#tgr_pyr').click(function() {
  					  $(gtr).hide();
					  $(lth).hide();
					  $(lyc).hide();
					  $('#pyro').slideDown();
					  $(ven).hide();
					});
					$('#tgr_ven').click(function() {
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