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
  <link rel="stylesheet" href="css/full-slider.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  require_once("header.php");
  ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item imgCondo1 active">
        <div class="flex h-100 f-items-center f-content-center f-justify-center">
          <div class="carouselPos">
            <h1 class="titleCondo ft-48">Condo familial</h1>
            <p class="lead ft-30">Un condo pensé pour la famille.</p>
            <div class="carouselButtons">
              <div class="cardButton">
                <a class="ft-20 bg-2" href="contact.php">Demander une visite</a>
              </div>
              <div class="cardButton">
                <a class="ft-20 bg-2" href="condos.php">Découvrir nos condos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item imgCondo2">
        <div class="flex h-100 f-items-center f-justify-center">
          <div class="carouselPos">
            <h1 class="titleCondo ft-48">Condo minimaliste</h1>
            <p class="lead ft-36">Une aire de vie compacte.</p>
            <div class="carouselButtons">
              <div class="cardButton">
                <a class="ft-20 bg-2" href="contact.php">Demander une visite</a>
              </div>
              <div class="cardButton">
                <a class="ft-20 bg-2" href="condos.php">Découvrir nos condos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item imgCondo3">
        <div class="flex h-100 f-items-center f-justify-center">
          <div class="carouselPos">
            <h1 class="titleCondo ft-48">Condo moderne</h1>
            <p class="lead ft-36">Ambiance glamour et convivial.</p>
            <div class="carouselButtons">
              <div class="cardButton">
                <a class="ft-20 bg-2" href="contact.php">Demander une visite</a>
              </div>
              <div class="cardButton">
                <a class="ft-20 bg-2" href="condos.php">Découvrir nos condos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Précédent</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Suivant</span>
    </a>
  </div>

  <div class="container mx-auto descript flex f-justify-center ft-24">
    <p>En achetant un condo au Modulo Condos, vous avez le choix entre trois
      concepts de condos pensé pour vous, soit le condo familial, le condo minimaliste et le condo moderne. Un gage
      de mieux-être, assuré par une qualité de conception et de construction exceptionnelle.
      Vous souhaitez personnaliser encore plus votre unité? C’est possible grâce à notre service de designer
      intérieur.</p>
  </div>

  <div class="cardSection flex">
    <div class="cardImage">
      <img src="img/condos/condofamilial/salon.jpg" alt="">
    </div>
    <div class="cardContent f-wrap bg-6 f-items-center">
      <h1 class="cardTitle ft-48">Nos condos</h1>
      <p class="cardText ft-24">Quels que soient vos besoins, notre grand choix d’habitations luxueuses vous en mettra
        plein la vue. Voyez un aperçu des unités disponibles et demandez une visite en personne.</p>
      <div class="cardButton">
        <a class="ft-20 bg-2" href="contact.php">Demander une visite</a>
      </div>
      <div class="cardButton">
        <a class="ft-20 bg-2" href="condos.php">Découvrir nos condos</a>
      </div>
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
  <script src="js/main.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/lightbox.js"></script>
</body>

</html>
