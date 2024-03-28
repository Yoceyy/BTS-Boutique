<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>GEEKZONE</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/site.css">
  <link rel="stylesheet" href="../assets/css/owl.css">
  <link rel="stylesheet" href="../assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo ***** -->
            <a href="index.php" class="logo">
              <img src="../assets/images/LOGO GEEK 2.png" alt="">
            </a>

            <?php
            include "../Accueil/menu.php";
            ?>


            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="page-content">


                    <div class="row">
                      <div class="col-lg-12">
                        <div class="main-profile ">
                          <div class="row">
                            <div class="col-lg-4">
                              <img src="../assets/images/cedric-doumbe-je-suis-le-meilleur-3907754947.jpg" alt="" style="border-radius: 23px;">
                            </div>

                            <div class="col-lg-4 align-self-center">
                              <div class="main-info header-text">
                                <span>En Ligne</span>
                                <h4>Cédric Doumbé</h4>
                                <p>Personne peu me test poto.</p>
                                <div class="main-border-button">
                                  <a href="#">Modifier</a>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4 align-self-center">
                              <h4>Mon adresse</h4>
                              <ul>
                                <li>Cédric Doumbé</li>
                                <li>32 Rue tu peux pas me teste</li>
                                <li><span>None</span></li>
                                <li>Toulouse,aquitaine,France, 31234</li>
                              </ul>
                            </div>
                          </div>

                          <?php
                          include "vosachat.php";
                          include "../Accueil/footer.php";
                          ?>




                          <script src="../vendor/jquery/jquery.min.js"></script>
                          <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

                          <script src="../assets/js/isotope.min.js"></script>
                          <script src="../assets/js/owl-carousel.js"></script>
                          <script src="../assets/js/tabs.js"></script>
                          <script src="../assets/js/popup.js"></script>
                          <script src="../assets/js/custom.js"></script>


</body>

</html>