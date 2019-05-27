<!doctype html>
<html class="no-js" lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Modulo Condos</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="manifest" href="site.webmanifest">
	<link rel="apple-touch-icon" href="icon.png">
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,600,700%20Libre+Baskerville:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php
  require_once("header.php");
  ?>

	<div id="contactBanner" class="flex f-items-center">
		<h1 class="bannerTitle ft-48">Nous joindre</h1>
	</div>

	<div class="descript flex f-justify-center ft-24 container">
		<p>Prenex rendez-vous avec un(e) agent(e) pour visiter nos condos modèle.</p>
	</div>

	<div class="formulaire container">
		<h1 class="ft-36 col-12 t-center">Formulaire</h1>
		<div class="col-md-8 col-sm-12 mb-5 mx-auto">
			<div class="form-area ft-20">
				<form role="form">
					<div class="form-group">
						<label for="name">Votre nom</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>
					<div class="form-group">
						<label for="email">Courriel</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
					<div class="form-group">
						<label for="mobile">numéro de téléphone</label>
						<input type="tel" class="form-control" id="mobile" name="mobile" required>
					</div>
					<div class="form-group">
						<label for="subject">Sujet</label>
						<input type="text" class="form-control" id="subject" name="subject" required>
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea class="form-control" id="message" maxlength="800" rows="7"></textarea>
					</div>
					<button type="submit" id="submit" name="submit" class="btn btn-primary ft-24 bg-2 condoButton">Soumettre</button>
				</form>
			</div>
		</div>
	</div>

	<section class="contactBottom bg-1">
		<div class="container">
			<div class="textBottom flex f-justify-between">
				<p class="ft-22 mb-2 mt-5">Carte géographique des condos de tous les secteurs</p>
				<p class="ft-22 mb-5 mt-5">Pour prendre rendez-vous avec le bureau des ventes</p>
			</div>
			<div class="textBottom flex f-wrap">
			<iframe class="mb-5 mr-5" src="https://www.google.com/maps/d/embed?mid=1XWBLWwNthHRRvh9D_8WrfvLEvl_M_nU3" width="45%"height="480"></iframe>
				<div class="flex footerAddress ml-5 f-column mt-5">
      		<a class="ft-18" href="tel:1-555-982-1234">Téléphone : 555-982-1234</a>
				 	<a class="ft-18" href="mailto:info@modulocondos.com">Courriel : info@modulocondos.com</a>
				</div>
			 </div>
		</div>
	</section>

	<?php
  require_once("footer.php");
  ?>

	<script src="js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	 crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
	</script>
	<script src="js/plugins.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
		window.ga = function () {
			ga.q.push(arguments)
		};
		ga.q = [];
		ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto');
		ga('send', 'pageview')
	</script>
	<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>