<?php require_once 'app/getMovieData.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bíóhúsið - Bestir á Íslandi</title>
		<link rel="stylesheet" href="assets/stylesheets/main.css">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	</head>
	<body>
		<!-- navbar -->
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand og toggle -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#biohusid-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Bíóhúsið</a>
				</div> <!-- navbar header -->

				<!-- Toggling -->
				<div class="collapse navbar-collapse" id="biohusid-navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Forsíða</a></li>
						<li><a href="#">Væntanlegt</a></li>
						<li><a href="#">Um Bíóhúsið</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="push-right"><a href="#login-modal" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i> Innskráning</a></li>
					</ul>
				</div>

			</div> <!-- container -->
		</nav>

		<!-- login modal -->
		<?php include_once 'assets/templates/modals/loginModal.html.php'; ?>

		<!-- new user modal -->
		<?php include_once 'assets/templates/modals/newUserModal.html.php'; ?>


		<!-- jumbotron -->
		<div class="jumbotron">
			<div class="container">
				<h1>Bíóhúsið<small> - Aðeins það allra besta Hópur 15</small></h1>
			</div>
		</div>

		<!-- Movies -->
		<?php include_once 'assets/templates/currentShowsList.html.php'; ?>

		
		
		<?php include_once 'assets/templates/footer.html.php'; ?>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="assets/javascripts/bootstrap.js"></script>
	</body>
</html>
