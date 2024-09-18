<?php
session_start();
if (isset($_SESSION['isLoggedIn']) &&($_SESSION['isLoggedIn'] != 1)) {
  session_destroy();
}
if (isset($_SESSION['FailedtoAdd']) &&($_SESSION['FailedtoAdd'])== 1) {
  echo "<script> Alert('There was a problem you pet has not been added for adoption try again')</script>";
  $_SESSION['FailedtoAdd'] = 0;
}
require_once 'connection.php';
if (
  isset($_POST['PetName']) && ($_POST['PetName'] != "")
  && isset($_POST['Age']) && ($_POST['Age'] != "")
  && isset($_POST['Sex']) && ($_POST['Sex'] != "Sex")
  && isset($_POST['Castrated']) && ($_POST['Castrated'] != "Castrated?")
  && isset($_POST['MoreInfo']) && ($_POST['MoreInfo'] != "")
) {
  $UserID = $_SESSION['UserID'];
  $PetName = $_POST['PetName'];
  $Age = $_POST['Age'];
  $Sex = $_POST['Sex'];
  $Castrated = $_POST['Castrated'];
  $MoreInfo = $_POST['MoreInfo'];
  $petType = $_POST['petType'];
  if (!empty($_FILES['PetImage'])) {
    $PetImage = $_FILES['PetImage']['name'];
    $PetImageTemp = $_FILES['PetImage']['tmp_name'];
    if (!move_uploaded_file($PetImageTemp, "petsimages/$PetImage")) {
      echo "HI";
    }
  }


  $query = "Insert into pets values(null, \"$PetName\",\"$Age\", \"$Sex\",\"$Castrated\",\"$PetImage\" ,\"$MoreInfo\" ,\"$UserID\",\"available\" ,\"$petType\")";
  $result = mysqli_query($con, $query);

  if (!$result) {
    echo "There was an error in the submission";
  } else{
    $_SESSION['IsOnAdoption']=1;
    header("Location: index.php");


  }
}
mysqli_close($con);
?>
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
    .whitec {
      text-align: center;
      font-size: 33pt;
      font-weight: bolder;
      color: #fff;
    }

    .bottom {
      font-weight: bolder;
      font-size: 35pt;
      color: #fff;
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
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
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
              <li><a class="dropdown-item active" href="Put for adoption.php">Put for adoption</a></li>
            </ul>
          </li><!-- list contain put for adoption and adopt-->
          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="loginpage.php" class="nav-link"> <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg> </a></li>
          <?php if (isset($_SESSION['isLoggedIn'])) { ?>
            <li class="nav-item"><a href="checkout.php" class="nav-link"> <img src="images/shopping-cart.png" alt="" width="25pt" height="25pt"> </a></li>
            <li class="nav-item"><a href="logout.php?logout" class="nav-link"> <img src="images/logout.png" alt="" width="25pt" height="25pt"> </a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="ftco-appointment ftco-section ftco-no-pt">
    <div class="overlayado"></div>
    <div class="container">
      <h2 class="mb-4 whitec">Put for Adoption</h2>
      <form method="post" enctype="multipart/form-data" action="<?php $PHP_SELF ?>" class="appointment">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="form-field">
                <div class="select-wrap">
                  <input type="file" accept="image/*" name="PetImage" size="30">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" name="PetName" placeholder="Pet Name">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="number" class="form-control" name="Age" placeholder="Age">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-wrap">
                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                <select name="petType" class="form-control">
                  <option value="petType">PetType</option>
                  <option value="cat">Cat</option>
                  <option value="dog">Dog</option>
                  <option value="bird">Bird</option>
                  <option value="hamster">Hamster</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-wrap">
                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                <select name="Sex" id="" class="form-control">
                  <option value="">Sex</option>
                  <option value="0">Female</option>
                  <option value="1">Male</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-wrap">
                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                <select name="Castrated" id="" class="form-control">
                  <option value="">Castrated?</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <textarea name="MoreInfo" cols="30" rows="7" class="form-control" placeholder="Precise the pet breed and some extra information you find important" required></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="submit" value="Put for Adoption" class="btn btn-primary py-3 px-4">
            </div>
          </div>
        </div>
      </form>
    </div>
    </div>
    </div>
  </section>



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