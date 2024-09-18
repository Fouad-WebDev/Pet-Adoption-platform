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
    .myflex {
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
    }
    :hover .d-block{
      cursor: pointer;  
    } 
    .card-img-top{
     object-fit:contain;
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
  <nav class="navbar navbar-expand-lg navbar-dark  ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <span class="navbar-brand"><span class="flaticon-pawprint-1 mr-2"></span>Mucho's World</span>
      <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
              </button>-->
      <!--make it to the right-->
      <div class="collapse navbar-collapse ml-5" id="ftco-nav">
        <ul class="navbar-nav ml-auto  ">
          <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li> <!-- introduction to the team to be added -->
          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item active" href="Accessories.php">Accessories</a></li>
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
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li> <!--  link into the same inpage at the end  for index page only-->
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
  <!-- carousel start -->
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="images/Chatfilter.jpg" class="d-block m-auto " alt="cats" onclick="Myfiltercats()">
        <div class="carousel-caption d-block d-md-block pt-5">

        </div>
      </div>
      <div class="carousel-item " data-bs-interval="2000">
        <img src="images/dogfilter.jpg" class="d-block m-auto" width="20%" alt="dogs" onclick="Myfilterdogs()">
        <div class="carousel-caption d-block d-md-block">

        </div>
      </div>
      <div class="carousel-item ">
        <img src="images/hamfilter.png" class="d-block m-auto" width="15%" alt="hamsters" onclick="Myfilterhamsters()">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item ">
        <img src="images/birdfilter.png" class="d-block m-auto" width="30%" alt="birds" onclick="Myfilterbirds()">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- carousel end -->
  <!-- accessories  start -->
  <?php if (isset($_GET['error'])) { ?>
    <div id="overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100vh; background-color: rgba(0, 0, 0, 0.5); display: none; z-index: 9999;">
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: rgb(0,251,180);color:white; padding: 8px; border-radius: 5px; ">
        <p><span class="error"><?php echo $_GET['error']; ?></span></p>
      </div>
    </div>

    <script>
      var overlay = document.getElementById("overlay");
      var errorMessage = document.getElementById("errormessage");

      overlay.style.display = "block";

      setTimeout(function() {
        overlay.style.display = "none";
      }, 2000);
    </script>
  <?php } ?>
  <div class="container-fluid d-flex justify-content-evenly align-content-between  myflex">
    <?php
    require_once "connection.php";
    $query = "Select * from Products where ProductType='Accessories'";
    $result = mysqli_query($con, $query);
    $nbr = mysqli_num_rows($result);

    if ($nbr == 0) {
      echo "There are no accessories for this pet at the moment";
    } else {
      for ($i = 0; $i < $nbr; $i++) {

        $row = mysqli_fetch_assoc($result);

        echo "<div class='card $row[petType]' style='width: 18rem;'>";
        echo  "<img src='productimages/$row[ProductImage]' class='card-img-top' width='200px' height='200px' alt='...'>";
        echo "<div class='card-body'>";
        echo  "<h4 class='card-title'>$row[ProductName]</h4>";
        echo  "<h6>$$row[ProductPrice]</h6>";
        echo "<p class='card-text'>$row[ProductDesc]</p>";
        if (isset($_SESSION['isLoggedIn'])) {
          echo "<a href='addcart.php?ProductID=$row[ProductID]&from=$row[ProductType]' class='btn btn-primary'>add to cart</a>";
        } else {
          echo "<a href='loginpage.php?from=Accessories' class='btn btn-primary'>add to cart</a>";
        }
        echo  "</div>";
        echo  "</div>";
      }
    }
    ?>
  </div>
  <!-- acessories end -->
  <!-- loader -->

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
  <script>
    function Myfiltercats() {
      var div = document.querySelectorAll(".hamster");
      for (var d = 0; d < div.length; d++) {
        div[d].style.display = "none";
      }
      var div1 = document.querySelectorAll(".dog");
      for (var d = 0; d < div1.length; d++) {
        div1[d].style.display = "none";
      }
      var div2 = document.querySelectorAll(".birds");
      for (var d = 0; d < div2.length; d++) {
        div2[d].style.display = "none";
      }
      var div3 = document.querySelectorAll(".cat");
      for (var d = 0; d < div3.length; d++) {
        div3[d].style.display = "inline";
      }
    }

    function Myfilterdogs() {
      var div = document.querySelectorAll(".hamster");
      for (var d = 0; d < div.length; d++) {
        div[d].style.display = "none";
      }
      var div1 = document.querySelectorAll(".cat");
      for (var d = 0; d < div1.length; d++) {
        div1[d].style.display = "none";
      }
      var div2 = document.querySelectorAll(".birds");
      for (var d = 0; d < div2.length; d++) {
        div2[d].style.display = "none";
      }
      var div3 = document.querySelectorAll(".dog");
      for (var d = 0; d < div3.length; d++) {
        div3[d].style.display = "inline";
      }
    }

    function Myfilterhamsters() {
      var div = document.querySelectorAll(".cat");
      for (var d = 0; d < div.length; d++) {
        div[d].style.display = "none";
      }
      var div1 = document.querySelectorAll(".dog");
      for (var d = 0; d < div1.length; d++) {
        div1[d].style.display = "none";
      }
      var div2 = document.querySelectorAll(".birds");
      for (var d = 0; d < div2.length; d++) {
        div2[d].style.display = "none";
      }
      var div3 = document.querySelectorAll(".hamster");
      for (var d = 0; d < div3.length; d++) {
        div3[d].style.display = "inline";
      }
    }

    function Myfilterbirds() {
      var div = document.querySelectorAll(".hamster");
      for (var d = 0; d < div.length; d++) {
        div[d].style.display = "none";
      }
      var div1 = document.querySelectorAll(".dog");
      for (var d = 0; d < div1.length; d++) {
        div1[d].style.display = "none";
      }
      var div2 = document.querySelectorAll(".cat");
      for (var d = 0; d < div2.length; d++) {
        div2[d].style.display = "none";
      }
      var div3 = document.querySelectorAll(".birds");
      for (var d = 0; d < div3.length; d++) {
        div3[d].style.display = "inline";
      }
    }
  </script>
</body>

</html>