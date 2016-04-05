<?php 


	require_once '../bootstrap.php';


	function pageController() {

		$data = [];

		$user_id = 06;

		$data['user'] = User::find($user_id);
		return $data;
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
					<div class="panel-heading"><h4 class='subhead'><?= $user->first_name . ' ' . $user->last_name ?></h4></div>
				<!-- List group -->
					<ul class="list-group">
					<li class="list-group-item"><strong>User ID: </strong> <?= $user->id ?> </li>
					<li class="list-group-item"><strong>User name: </strong> <?= $user->user_name ?> </li>
					<li class="list-group-item"><strong>Password: </strong> <?= $user->password ?></li>
					<li class="list-group-item"><strong>Join date: </strong> <?= $user->join_date ?> </li>
					<li class="list-group-item"><strong>Email address: </strong> <?= $user->email ?> </li>
					<li class="list-group-item"><strong>Band Name: </strong> <?= $user->band_name ?> </li>
					<li class="list-group-item"><strong>Instrument: </strong> <?= $user->instrument ?> </li>
					<li class="list-group-item"><strong>In possesion of your soul?: </strong> <?php echo $user->soul_possession ? 'yes' : 'no'; ?> </li>
					</ul>
				<!-- description and photo -->
					<div class="panel-body">
						<p><?= $user->bio ?></p>
					</div>
					<button type="submit" class="btn btn-default">Contact Seller</button>
				</div> <!-- end panel -->
			</div> <!-- end col-xs-12 col-sm-6 col-md-8 -->

			<div class="col-xs-12 col-sm-6 col-md-6">
				<img class="image" src=<?=$user->image_url?> alt="">
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