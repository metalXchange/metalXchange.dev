<?php 

	function pageController() {
		$profile = [
			'user_id'=>666,
			'join_date'=>2016-01-01,
			'first_name'=>'Ozzy',
			'last_name'=>'Osbourne',
			'email'=>'ozzy@sharon.com',
			'password'=>'ohgodpleasehelpme',
			'band_name'=>'Black Sabbath',
			'instrument'=>'vocals',
			'soul_possesion'=>false,
			'bio'=>'English singer, songwriter, and television personality. He rose to prominence in the early 1970s as the lead vocalist of the band Black Sabbath, widely considered to be the first heavy metal band. Osbourne was fired from Black Sabbath in 1979 and has since had a successful solo career, releasing 11 studio albums, the first seven of which were all awarded multi-platinum certifications in the U.S.',
			'img'=>'/img/profile/OzzyOsbourne.jpg'
		];
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
	
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
		 		<div class="panel panel-default">
				<!-- Default panel contents -->
					<div class="panel-heading"><h4 class='subhead'><?= $first_name . ' ' . $last_name ?></h4></div>
				<!-- List group -->
					<ul class="list-group">
					<li class="list-group-item"><strong>User ID: </strong> <?= $user_id ?> </li>
					<li class="list-group-item"><strong>Join date: </strong> <?= $join_date ?> </li>
					<li class="list-group-item"><strong>Email address: </strong> <?= $email ?> </li>
					<li class="list-group-item"><strong>Band Name: </strong> <?= $band_name ?> </li>
					<li class="list-group-item"><strong>Instrument: </strong> <?= $instrument ?> </li>
					<li class="list-group-item"><strong>In possesion of your soul?: </strong> <?php echo $soul_possesion ? 'yes' : 'no'; ?> </li>
					</ul>
				<!-- description and photo -->
					<div class="panel-body">
						<p><?= $bio ?></p>
					</div>
					<button type="submit" class="btn btn-default">Contact Seller</button>
				</div> <!-- end panel -->
			</div> <!-- end col-xs-12 col-sm-6 col-md-8 -->

			<div class="col-xs-12 col-sm-6 col-md-6">
				<img class="image" src=<?=$img?> alt="">
			</div> <!-- end col-xs-12 col-sm-6 col-md-8 -->

		</div> <!-- end row -->

 	<?php include '../views/partials/footer.php' ?>

	<script src="/js/jquery-1.12.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>
 	<script>

 		// this will include any necessary embedded javascript

 	</script>
 	
 </body>
 </html>