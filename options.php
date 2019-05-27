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

	<div class="formOptions">
		<h1 class="ft-36 mt-4 t-center">Formulaire</h1>
	</div>
	<div class="container">
		<div class="row">
			<form action="javascript:void(0)" id="formCalcul" class="mx-auto col-sm-12 col-md-10 col-lg-8">
				<div class="form-group ft-20">
					<label for="type">Type de condo</label>
					<select data-cell="A1" class="form-control custom-select-lg ft-20 mb-3" id="type">
						<option selected>Cliquer pour choisir un type de condo</option>
						<option id="min" value="180000">Le minimaliste</option>
						<option id="fam" value="220000">Le familiale</option>
						<option id="mod" value="400000">Le moderne</option>
					</select>
				</div>
				<div class="form-group">
					<label for="secteur">Secteur</label>
					<select data-cell="A2" class="form-control custom-select-lg ft-20 mb-3" id="secteur">
						<option selected>Cliquer pour choisir un secteur</option>
						<option id="cha" value="25000">Charlesbourg</option>
						<option id="anc" value="0">Ancienne-Lorette</option>
						<option id="hau" value="80000">Haute-Ville</option>
						<option id="bea" value="0">Beauport</option>
						<option id="lim" value="50000">Limoilou</option>
					</select>
				</div>
				<div class="form-group">
					<label for="peinture">Peinture</label>
					<select data-cell="A3" class="form-control custom-select-lg ft-20 mb-3" id="peinture">
						<option selected>Cliquer pour choisir la surface de peinture</option>
						<option value="1000">50% des surfaces</option>
						<option value="1500">75% des surfaces</option>
						<option value="2000">100% des surfaces</option>
					</select>
				</div>
				<h2 class="ft-26 col-12 mt-2">Ajout de fonctionnalités</h2>
				<div class="form-check">
					<input data-cell="A4" class="form-check-input" type="checkbox" value="8000" id="bain" name="bain">
					<label class="form-check-label" for="bain">
						Salle de bain
					</label>
				</div>
				<div class="form-check">
					<input data-cell="A5" class="form-check-input" type="checkbox" value="2000" id="aspirateur" name="aspirateur">
					<label class="form-check-label" for="aspirateur">
						Aspirateur centrale
					</label>
				</div>
				<div class="form-check">
					<input data-cell="A6" class="form-check-input" type="checkbox" value="5000" id="alarme" name="alarme">
					<label class="form-check-label" for="alarme">
						Système d'alarme
					</label>
				</div>
				<h2 class="ft-26 col-12 mt-2">Plancher de bois franc</h2>
				<table>
					<tr class="checkPlancher">
						<td>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="2500" data-cell="A7" id="salon" name="salon">
								<label class="form-check-label" for="salon">
									Salon
								</label>
							</div>
						</td>
						<td>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="2000" data-cell="A8" id="chambre1" name="chambre1">
								<label class="form-check-label" for="chambre1">
									Chambre 1
								</label>
							</div>
						</td>
						<td>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="2000" data-cell="A9" id="chambre2" name="chambre 2">
								<label class="form-check-label" for="chambre2">
									Chambre 2
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-check">
								<input id="cha3" class="form-check-input" type="checkbox" value="2500" data-cell="A10" id="chambre3" name="chambre 3">
								<label class="form-check-label" for="chambre3">
									Chambre 3
								</label>
							</div>
						</td>
						<td>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="5000" data-cell="A11" id="manger" name="manger">
								<label class="form-check-label" for="manger">
									Salle à manger
								</label>
							</div>
						</td>
						<td>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="5000" data-cell="A12" id="aires" name="aires">
								<label class="form-check-label" for="aires">
									Aires communes
								</label>

							</div>
						</td>
					</tr>
				</table>
				<div class="form-group">
					<div class="form-check">
						<input data-cell="A14" value="15" class="form-check-input" type="checkbox" name="plancherCheck" id="plancherCheck" name="planchercheck">
						<label class="form-check-label" for="plancherCheck">
							Plancher chauffant en pieds carré
						</label>
						<label for="plancher">Minimum: 60pi² Maximum: surface totale du condo</label>
						<input type="number" data-cell="A15" class="form-control custom-select-lg ft-20" id="plancher" name="plancher" min="60"
						 disabled>
					</div>
					<div class="d-none">
						<label data-cell="A13" data-format="$ 0,0.00" data-formula="(A14*A15)">$ 0.00</label>
					</div>
					<div class="form-group ft-30">
						<label class="col-12">Total</label>
						<div class="col-12">
							<label data-cell="B1" data-format="$ 0,0.00" data-formula="SUM(A1:A13)">$ 0.00</label>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>


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
	<script src="js/jquery-calx-sample-2.2.8.min.js"></script>
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