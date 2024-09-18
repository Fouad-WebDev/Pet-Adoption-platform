<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mucho's World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .mybg {
      background-color: rgb(248, 249, 253);
    }
  </style>
</head>

<body>

  <div class="wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex align-items-center">

        </div>
        <div class="col-md-6 d-flex justify-content-md-end">
          <div class="social-media">
            <p class="mb-0 d-flex">
              <a href="https://www.facebook.com/" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
              <a href="https://twitter.com/" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
              <a href="https://www.instagram.com/" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><span class="flaticon-pawprint-1 mr-2"></span>Mucho's World</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse ml-5" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>

          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Accessories.php">Accessories</a></li>
              <li><a class="dropdown-item" href="Toys.php">Toys</a></li>
              <li><a class="dropdown-item" href="Food.php">Food</a></li>
            </ul>
          </li> <!-- list of products acc toys and food-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Adoption
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="adopt.php">Adopt </a></li>
              <?php if (isset($_SESSION['isLoggedIn'])) {
                echo "<li><a class='dropdown-item' href='Put for adoption.php'>Put for adoption</a></li>";
              } else {
                echo "<li><a class='dropdown-item' href='loginpage.php?from=Put for adoption'>Put for adoption</a></li>";
              } ?>
            </ul>
          </li><!-- list contain put for adoption and adopt-->
          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="loginpage.php" class="nav-link"> <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg> </a></li>
          <?php
          if (isset($_SESSION['isLoggedIn'])) { ?>
            <li class="nav-item"><a href="checkout.php" class="nav-link"> <img src="images/shopping-cart.png" alt="" width="25pt" height="25pt"> </a></li>
            <li class="nav-item"><a href="logout.php?logout" class="nav-link"> <img src="images/logout.png" alt="" width="25pt" height="25pt"> </a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">About Us</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
      <div class="row d-flex no-gutters">
        <div class="col-md-5 d-flex">
          <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about-1.jpg);">
          </div>
        </div>
        <div class="col-md-7 pl-md-5 py-md-5">
          <div class="heading-section pt-md-5">
            <h2 class="mb-4">Why Choose Us?</h2>
          </div>
          <div class="row">
            <div class="col-md-6 services-2 w-100 d-flex">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
              <div class="text pl-3">
                <h4>Care Advices</h4>
                <p>Empower your pet parenting journey with expert care guidance.</p>
              </div>
            </div>
            <div class="col-md-6 services-2 w-100 d-flex">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
              <div class="text pl-3">
                <h4>Customer Supports</h4>
                <p>Count on our friendly team for reliable and prompt assistance.</p>
              </div>
            </div>
            <div class="col-md-6 services-2 w-100 d-flex">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
              <div class="text pl-3">
                <h4>Emergency Services</h4>
                <p>We're here 24/7, ready to handle your pet's emergencies.</p>
              </div>
            </div>
            <div class="col-md-6 services-2 w-100 d-flex">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
              <div class="text pl-3">
                <h4>Veterinary Help</h4>
                <p>Trust our skilled vets to keep your pet healthy and happy.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-counter" id="section-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="50">0</strong>
            </div>
            <div class="text">
              <span>Customer</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="8500">0</strong>
            </div>
            <div class="text">
              <span>Professionals</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="20">0</strong>
            </div>
            <div class="text">
              <span>Products</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="50">0</strong>
            </div>
            <div class="text">
              <span>Pets Hosted</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Meet the team start-->
  <section class="mybg">
    <h1 style="text-align:center; font-size: 54pt;font-family:serif; font-weight: bold"> Meet the team</h1>
    <div class="container d-flex justify-content-around ">
      <div class="card" style="width: 18rem;">
        <img src="images/Chatfilter.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="images/birdfilter.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="images/hamfilter.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Meet the team end-->
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


</body>

</html>