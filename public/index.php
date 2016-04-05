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
		<div class="row">
		  <div class="col-sm-4 col-md-2">
		    <div class="thumbnail">
		      <img src="/img/index_guitar.jpg" alt="...">
		      <div class="caption">
		        <h3>Guitars</h3>
		        <p><a href="/ads.index.php?table=guitars&subcat=flying_v">Flying V's</a></p>
		        <p><a href="/ads.index.php?table=guitars&subcat=rand_point">Random Pointy</a></p>
		        <p><a href="/ads.index.php?table=guitars&subcat=gen_scary">Generally Scary</a></p>
		        <p><a href="/ads.index.php?table=guitars&subcat=novelty">Novelty</a></p>
		        <p><a href="/ads.index.php?table=guitars" class="btn btn-default" role="button">See Category</a></p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-4 col-md-2">
		    <div class="thumbnail">
		      <img src="/img/index_leather.jpg" alt="...">
		      <div class="caption">
		        <h3>Leathers</h3>
		        <p><a href="/ads.index.php?table=leather&subcat=pants">Pants</a></p>
		        <p><a href="/ads.index.php?table=leather&subcat=vests">Vests</a></p>
		        <p><a href="/ads.index.php?table=leather&subcat=boots">Greaves / Boots</a></p>
		        <p><a href="/ads.index.php?table=leather&subcat=codpieces">Codpieces</a></p>
		        <p><a href="/ads.index.php?table=leather" class="btn btn-default" role="button">See Category</a></p>
		      </div>
		    </div>
		  </div>
			
		  <div class="col-sm-4 col-md-2">
		    <div class="thumbnail">
		      <img src="/img/index_lycra.jpg" alt="...">
		      <div class="caption">
		        <h3>Lycra</h3>
		        <p><a href="/ads.index.php?table=lycra&subcat=pants">Pants</a></p>
		        <p><a href="/ads.index.php?table=lycra&subcat=fests">Vests</a></p>
		        <p><a href="/ads.index.php?table=lycra&subcat=gloves">Gloves</a></p>
		        <p><a href="/ads.index.php?table=lycra&subcat=unisuit">Unisuits</a></p>
		        <p><a href="/ads.index.php?table=lycra" class="btn btn-default" role="button">See Category</a></p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-4 col-md-2">
		    <div class="thumbnail">
		      <img src="/img/index_pyro.jpg" alt="...">
		      <div class="caption">
		        <h3>Pyrotechnics</h3>
		        <p><a href="/ads.index.php?table=pyrotechnics&subcat=smoke_pot">Smoke Pot</a></p>
		        <p><a href="/ads.index.php?table=pyrotechnics&subcat=concussion">Concussion</a></p>
		        <p><a href="/ads.index.php?table=pyrotechnics&subcat=fireballs">Fireballs</a></p>
		        <p><a href="/ads.index.php?table=pyrotechnics&subcat=flame_projectors">Flame Projectors</a></p>
		        <p><a href="/ads.index.php?table=pyrotechnics" class="btn btn-default" role="button">See Category</a></p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-4 col-md-2">
		    <div class="thumbnail">
		      <img src="/img/index_venue.jpg" alt="...">
		      <div class="caption">
		        <h3>Venues</h3>
		        <p><a href="/ads.index.php?table=venues&subcat=outdoor">Outdoor</a></p>
		        <p><a href="/ads.index.php?table=venues&subcat=dive_bar">Dive Bar</a></p>
		        <p><a href="/ads.index.php?table=venues&subcat=aband_bldg">Deserted Buildings</a></p>
		        <p><a href="/ads.index.php?table=venues&subcat=basement">Someone's Basement</a></p>
		        <p><a href="/ads.index.php?table=venues" class="btn btn-default" role="button">See Category</a></p>
		      </div>
		    </div>
		  </div>
		</div>
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