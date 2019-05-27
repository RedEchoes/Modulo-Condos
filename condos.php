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
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  require_once("header.php");
  ?>

  <div id="condoBanner" class="flex f-items-center">
    <h1 class="bannerTitle ft-48">Modulo Condos</h1>
  </div>

  <div class="descript ft-24">
    <p>Vous venex de trouver votre prochain condo! Conçu pour les réalités du quotidien et alliant un style chaleureux
      et moderne.</p>
  </div>

  <!-- TIROIRS -->
  <div class="tiroirs">
    <div class="tir-item">
      <div class="tir-head bg-3 flex f-items-center">
        <h2>LE MINIMALISTE</h2>
        <div class="tir-descript f-items-center flex f-justify-between">
          <p class="ft-24">1400 pi²</p>
          <div class="condoPrice f-items-center t-center">
            <p class="ft-20">Prix de base</p>
            <p class="ft-24">180 000$</p>
          </div>
        </div>
      </div>
      <div class="tir-content container flex f-justify-between">
        <div class="condoText">
          <p class="ft-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut commodo quam. In
            vel sagittis nunc, vitae scelerisque ipsum. Maecenas efficitur leo ut elit malesuada laoreet. Nunc ligula
            sem, sagittis at enim ut, vehicula efficitur sem. Curabitur facilisis turpis gravida, luctus sem eget,
            congue purus. Nam facilisis aliquet congue. Aenean vel lacus id justo porta molestie.

          </p>
        </div>
        <div class="condoButtons">
          <a class="condoButton bg-2 ft-20" href="contact.php">Demander une visite</a>
          <a class="condoButton bg-2 ft-20" href="options.php">Personnaliser</a>
        </div>
        <div class="condoCarousel">
          <div class="slick-carousel">
            <div>
              <a data-lightbox="minimaliste" href="img/condos/condominimaliste/chambre1.jpg"><img src="img/condos/condominimaliste/chambre1.jpg" alt="Image de la chambre 1"></a>
            </div>
            <div>
              <a data-lightbox="minimaliste" href="img/condos/condominimaliste/chambre2.jpg"><img src="img/condos/condominimaliste/chambre2.jpg" alt="Image de la chambre 2"></a>
            </div>
            <div>
              <a data-lightbox="minimaliste" href="img/condos/condominimaliste/cuisine.jpg"><img src="img/condos/condominimaliste/cuisine.jpg" alt="Image de la cuisine"></a>
            </div>
            <div>
              <a data-lightbox="minimaliste" href="img/condos/condominimaliste/salle-de-bain.jpg"><img src="img/condos/condominimaliste/salle-de-bain.jpg" alt="Image de la salle de bain"></a>
            </div>
            <div>
              <a data-lightbox="minimaliste" href="img/condos/condominimaliste/salon.jpg"><img src="img/condos/condominimaliste/salon.jpg" alt="Image du salon"></a>
            </div>
          </div>
        </div>
        <section class="descrp-tech-et-map">
          <div class="descr-tech bg-3">
            <ul class="text-center">
              <li class="div-icone t-center"><img src="img/square.svg" alt="square" class="image-descr-tech"><br /><span
                  class="ft-20">Surface: 1400 pi²</span></li>
              <li class="div-icone"><img src="img/bed.svg" alt="bed" class="image-descr-tech"><br /><span class="ft-20">Nombre
                  de chambres: 2</span></li>
              <li class="div-icone"><img src="img/stairs.svg" alt="stairs" class="image-descr-tech"><br /><span class="ft-20">Nombre
                  d'étages: 1</span></li>
              <li class="div-icone"><img src="img/bathtub.svg" alt="bathtub" class="image-descr-tech"><br /><span class="ft-20">Nombre
                  de salle de bain: 1</span></li>
              <li class="div-icone"><img src="img/bathroom.svg" alt="bathroom" class="image-descr-tech"><br /><span
                  class="ft-20">Nombre de salle d'eau: 0</span></li>
              <li class="div-icone"><img src="img/parquet.svg" alt="parquet" class="image-descr-tech"><br /><span class="ft-20">Planchers:
                  Vinyle et tuiles</span></li>
              <li class="div-icone"><img src="img/antique-balcony.svg" alt="antique-balcony" class="image-descr-tech"><br /><span
                  class="ft-20">Balcon: Arrière</span></li>
            </ul>
          </div>
        </section>
        <iframe src="https://www.google.com/maps/d/embed?mid=1crCJeCj1JmjzzxR8dKgn17xrTYK8ewA0" width="50%" height="480"></iframe>
      </div>
    </div>
    <div class="tir-item">
      <div class="tir-head bg-4 flex f-items-center">
        <h2>LE FAMILIAL</h2>
        <div class="tir-descript f-items-center flex f-justify-between">
          <p class="ft-24">1800 pi²</p>
          <div class="condoPrice f-items-center t-center">
            <p class="ft-20">Prix de base</p>
            <p class="ft-24">220 000$</p>
          </div>
        </div>
      </div>
      <div class="tir-content container flex f-justify-between">
        <div class="condoText">
          <p class="ft-20">Sed tellus odio, euismod non nisi quis, interdum fermentum felis. Proin ex nisl, placerat
            vitae dictum interdum, lacinia eu diam. Sed tincidunt condimentum magna, eget congue tellus porttitor
            condimentum. Nulla ac turpis tincidunt, facilisis velit dictum, porta sem. Aliquam erat volutpat. Nam
            dapibus iaculis nibh in sollicitudin. Nunc sed suscipit diam, ac vulputate sapien.

          </p>
        </div>
        <div class="condoButtons">
          <a class="condoButton bg-2 ft-20 " href="contact.php">Demander une visite</a>
          <a class="condoButton bg-2 ft-20" href="options.php">Personnaliser</a>
        </div>
        <div class="condoCarousel">
          <div class="slick-carousel">
            <div>
              <a data-lightbox="familial" href="img/condos/condofamilial/chambre1.jpg"><img src="img/condos/condofamilial/chambre1.jpg" alt="Image de la chambre 1"></a>
            </div>
            <div>
              <a data-lightbox="familial" href="img/condos/condofamilial/chambre2.jpg"><img src="img/condos/condofamilial/chambre2.jpg" alt="Image de la chambre 2"></a>
            </div>
            <div>
              <a data-lightbox="familial" href="img/condos/condofamilial/chambre3.jpg"><img src="img/condos/condofamilial/chambre3.jpg" alt="Image de la chambre 3"></a>
            </div>
            <div>
              <a data-lightbox="familial" href="img/condos/condofamilial/salle-de-bain.jpg"><img src="img/condos/condofamilial/salle-de-bain.jpg" alt="Image de la salle de bain"></a>
            </div>
            <div>
              <a data-lightbox="familial" href="img/condos/condofamilial/cuisine.jpg"><img src="img/condos/condofamilial/cuisine.jpg" alt="Image de la cuisine"></a>
            </div>
            <div>
              <a data-lightbox="familial" href="img/condos/condofamilial/salon.jpg"><img src="img/condos/condofamilial/salon.jpg" alt="Image du salon"></a>
            </div>
          </div>
        </div>
        <section class="descrp-tech-et-map">
          <div class="descr-tech bg-4">
            <ul class="text-center">
              <li class="div-icone t-center"><img src="img/square.svg" alt="square" class="image-descr-tech"><br /><span
                  class="ft-20">Surface: 1800 pi²</span></li>
              <li class="div-icone"><img src="img/bed.svg" alt="bed" class="image-descr-tech"><br /><span class="ft-20">Nombre
                  de chambres: 3</span></li>
              <li class="div-icone"><img src="img/stairs.svg" alt="stairs" class="image-descr-tech"><br /><span class="ft-20">Nombre
                  d'étages: 1</span></li>
              <li class="div-icone"><img src="img/bathtub.svg" alt="bathtub" class="image-descr-tech"><br /><span class="ft-20">Nombre
                  de salle de bain: 1</span></li>
              <li class="div-icone"><img src="img/bathroom.svg" alt="bathroom" class="image-descr-tech"><br /><span
                  class="ft-20">Nombre de salle d'eau: 1</span></li>
              <li class="div-icone"><img src="img/parquet.svg" alt="parquet" class="image-descr-tech"><br /><span class="ft-20">Planchers:
                  Stratifié et tuiles</span></li>
              <li class="div-icone"><img src="img/antique-balcony.svg" alt="antique-balcony" class="image-descr-tech"><br /><span
                  class="ft-20">Balcon: Arrière</span></li>
            </ul>
          </div>
        </section>
        <iframe src="https://www.google.com/maps/d/embed?mid=1wphhq7w-Hr7MalxIvHziMKYwkpC-xz4Y" width="50%" height="480"></iframe>
      </div>
    </div>
    <div class="tir-item">
      <div class="tir-head bg-5 flex f-items-center">
        <h2>LE MODERNE</h2>
        <div class="tir-descript f-items-center flex f-justify-between">
          <p class="ft-24">2400 pi²</p>
          <div class="condoPrice f-items-center t-center">
            <p class="ft-20">Prix de base</p>
            <p class="ft-24">400 000$</p>
          </div>
        </div>
      </div>
      <div class="tir-content container flex f-justify-between">
        <div class="condoText">
          <p class="ft-20">"Fusce lacinia at diam et maximus. Mauris ut ipsum quam. Aenean nulla lacus, aliquet sed
            nunc a, pretium iaculis tortor. Quisque vehicula augue urna, in rhoncus enim bibendum vitae. Morbi eget
            tellus consequat, pharetra quam sit amet, maximus leo. Suspendisse tortor felis, tincidunt non scelerisque
            nec, malesuada nec risus. Integer luctus mauris vel massa tempus, ut consequat augue accumsan. Aenean
            turpis turpis, maximus nec nisl in, accumsan consequat nisi. Suspendisse vulputate sapien et libero posuere
            molestie. Quisque eu tincidunt justo, ac consequat ex. Quisque et ipsum at urna interdum fringilla. Morbi
            commodo sem eget luctus commodo. Nam vel congue ante. Nulla facilisi. Proin interdum non sem eu malesuada.
            Fusce mollis finibus elit, et viverra magna tristique in.

            "

          </p>
        </div>
        <div class="condoButtons">
          <a class="condoButton bg-2 ft-20" href="contact.php">Demander une visite</a>
          <a class="condoButton bg-2 ft-20" href="options.php">Personnaliser</a>
        </div>
        <div class="condoCarousel">
          <div class="slick-carousel">
            <div>
              <a data-lightbox="moderne" href="img/condos/condofamilial/chambre1.jpg"><img src="img/condos/condofamilial/chambre1.jpg" alt="Image de la chambre 1"></a>
            </div>
            <div>
              <a data-lightbox="moderne" href="img/condos/condomoderne/chambre2.jpg"><img src="img/condos/condomoderne/chambre2.jpg" alt="Image de la chambre 2"></a>
            </div>
            <div>
              <a data-lightbox="moderne" href="img/condos/condomoderne/chambre3.jpg"><img src="img/condos/condomoderne/chambre3.jpg" alt="Image de la chambre 3"></a>
            </div>
            <div>
              <a data-lightbox="moderne" href="img/condos/condomoderne/cuisine.jpg"><img src="img/condos/condomoderne/cuisine.jpg" alt="Image de la cuisine"></a>
            </div>
            <div>
              <a data-lightbox="moderne" href="img/condos/condomoderne/piece-ouverte.jpg"><img src="img/condos/condomoderne/piece-ouverte.jpg" alt="Image de la pièce ouverte"></a>
            </div>
            <div>
              <a data-lightbox="moderne" href="img/condos/condomoderne/salle-a-manger.jpg"><img src="img/condos/condomoderne/salle-a-manger.jpg" alt="Image de la salla à manger"></a>
            </div>
            <div>
              <a data-lightbox="moderne" href="img/condos/condomoderne/salle-de-bain.jpeg"><img src="img/condos/condomoderne/salle-de-bain.jpeg" alt="Image de la salle de bain"></a>
            </div>
            <div>
              <a data-lightbox="moderne" href="img/condos/condomoderne/salon.jpeg"><img src="img/condos/condomoderne/salon.jpeg" alt="Image du salon"></a>
            </div>
          </div>
        </div>
        <section class="descrp-tech-et-map">
          <div class="descr-tech bg-5">
            <ul class="text-center">
              <li class="div-icone t-center"><img src="img/square.svg" alt="square" class="image-descr-tech"><br /><span
                  class="ft-20">Surface: 2400 pi²</span></li>
              <li class="div-icone"><img src="img/bed.svg" alt="bed" class="image-descr-tech"><br /><span class="ft-20">Nombre
                  de chambres: 3</span></li>
              <li class="div-icone"><img src="img/stairs.svg" alt="stairs" class="image-descr-tech"><br /><span class="ft-20">Nombre
                  d'étages: 2</span></li>
              <li class="div-icone"><img src="img/bathtub.svg" alt="bathtub" class="image-descr-tech"><br /><span class="ft-20">Nombre
                  de salle de bain: 1</span></li>
              <li class="div-icone"><img src="img/bathroom.svg" alt="bathroom" class="image-descr-tech"><br /><span
                  class="ft-20">Nombre de salle d'eau: 1</span></li>
              <li class="div-icone"><img src="img/parquet.svg" alt="parquet" class="image-descr-tech"><br /><span class="ft-20">Planchers:
                  Stratifié et tuiles</span></li>
              <li class="div-icone"><img src="img/antique-balcony.svg" alt="antique-balcony" class="image-descr-tech"><br /><span
                  class="ft-20">Balcon: Arrière et avant</span></li>
            </ul>
          </div>
        </section>
        <iframe src="https://www.google.com/maps/d/embed?mid=1XzxmjpD_xdR5wr3skmlkgoOUWInMyUeI" width="50%" height="480"></iframe>
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
  <script src="js/slick.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-calx-2.2.8.min.js"></script>
  <script src="js/lightbox.js"></script>
  <script src="js/carousel.js"></script>
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