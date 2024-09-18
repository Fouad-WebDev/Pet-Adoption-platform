<?php
session_start();

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

</head>

<body>
  <?php if (isset($_SESSION['IsOnAdoption']) && ($_SESSION['IsOnAdoption'] == 1)) { ?>
    <div id="overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100vh; background-color: rgba(0, 0, 0, 0.5); display: none; z-index: 9999;">
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: rgb(0,251,180);color:white; padding: 8px; border-radius: 5px; ">
        <p><span class="error"><?php echo 'The Pet is Now Available for adoption'; ?></span></p>
      </div>
    </div>

    <script>
      var overlay = document.getElementById("overlay");

      overlay.style.display = "block";

      setTimeout(function() {
        overlay.style.display = "none";
      }, 2000);
    </script>
  <?php
    $_SESSION['IsOnAdoption'] = 0;
  } ?>

  <?php if (isset($_SESSION['readytologin']) && ($_SESSION['readytologin'] == 1)) { ?>
    <div id="overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100vh; background-color: rgba(0, 0, 0, 0.5); display: none; z-index: 9999;">
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: rgb(0,251,180);color:white; padding: 8px; border-radius: 5px; ">
        <p><span class="error"><?php echo 'You can login in now'; ?></span></p>
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
  <?php
    $_SESSION['readytologin'] = 0;
  } ?>
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

      <div class="collapse navbar-collapse ml-5" id="ftco-nav">
        <ul class="navbar-nav ml-auto  ">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li> <!-- introduction to the team to be added -->
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
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li> <!--  link into the same inpage at the end  for index page only-->
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
  <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-11 ftco-animate text-center">
          <h1 class="mb-4">Highest Quality Care For Pets You'll Love </h1>

        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section bg-light ftco-no-pt ftco-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
          <div class="d-block services text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-blind"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Dog Walking</h3>
              <p>Surrounded by green beauty,our dog walks treat your pet to nature's exploration.
                 In the wild, away from noise, your cherished companion discovers joy with wagging tails.
                  Enter a realm where our caring guides lead your pup on daily adventures.</p>
             
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
          <div class="d-block services text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-dog-eating"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Pet Daycare</h3>
              <p>Distant from bustling streets, our pet day care offers 
                your furry pal a world of playful joy. Amidst nature's embrace, removed from urban chaos, 
                your pet forms bonds and finds delight. Step into a haven where our attentive staff guides 
                daily escapades.</p>
             
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
          <div class="d-block services text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-grooming"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Pet Grooming</h3>
              <p>Far from city hustle, our grooming service pampers your pet. 
                Skilled hands transform them into elegance, away from the ordinary. 
                Step into a serene space where your companion experiences comfort and renewed beauty.</p>
            
          </div>
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
  </div>
  <section class="ftco-counter " id="section-counter">
    <div class="container ">
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


  <section class="ftco-section testimony-section" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h2>Happy Clients &amp; Feedbacks</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                <div class="text">
                  <p class="mb-4">"This pet shop is a total gem! The grooming made my pooch sparkle, and the caring staff gave me top-notch advice for his diet."</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/pers1.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                <div class="text">
                  <p class="mb-4">"I can't thank this shop enough. Their emergency service swiftly saved my cat in a late-night scare. Lifesavers!"</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/pers2.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Sofia Mari</p>
                      <span class="position">Pet lover</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                <div class="text">
                  <p class="mb-4">"I'm amazed by this pet shop. Their customer support guided me through tough times with my parrot, and the vet help ensured his full recovery."</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/pers3.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Mia Shia</p>
                      <span class="position">Teacher</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                <div class="text">
                  <p class="mb-4">"My rabbit loves the day care here. They even helped me find a vet when he needed quick attention. So relieved!"</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/pers4.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Laura faho</p>
                      <span class="position">Proud mom</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h2>Affordable Packages</h2>
        </div>
      </div>
      <div class="row">

        <?php
        require "connection.php";
        $disq = "SELECT *
  FROM packages p
  JOIN package_services ps ON p.packageID = ps.packageID
  JOIN services s ON ps.ServiceID = s.ServiceID
  WHERE display = 1";

        $dis = mysqli_query($con, $disq);
        ?>
        <?php
        // Assuming you have the database connection and data retrieval code above

        // Step 3: Display the data on the web page
        $current_package_id = null;

        while ($row = mysqli_fetch_assoc($dis)) {
          if ($current_package_id != $row['packageID']) {
            if ($current_package_id !== null) {
              echo '<ul class="pricing-text mb-5">';
              foreach ($service_names as $service_name) {
                echo '<li><span class="fa fa-check mr-2"></span>' . $service_name . '</li>';
              }
              echo '</ul>';
              echo '<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              // Reset the service names array for the new package
              $service_names = array();
            }

            $current_package_id = $row['packageID'];

            echo '<div class="col-md-4 ftco-animate">';
            echo '<div class="block-7">';
            echo '<div class="img" style="background-image: url(images/pricing-2.jpg);"></div>';
            echo '<div class="text-center p-4">';
            echo '<span class="excerpt d-block">' . $row['packageName'] . '</span>';
            echo '<span class="price"><sup>$</sup> <span class="number">' . $row['finalPrice'] . '</span> <sub>/mos</sub></span>';
            echo '<ul class="pricing-text mb-5">'; // Start service names list
          }

          // Store the service names for each package
          $service_names[] = $row['ServiceName'];
        }

        // Print the last block after the loop ends
        if ($current_package_id !== null) {
          echo '<ul class="pricing-text mb-5">';
          foreach ($service_names as $service_name) {
            echo '<li><span class="fa fa-check mr-2"></span>' . $service_name . '</li>';
          }
          echo '</ul>';
          echo '<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
        }
        ?>
      </div>
    </div>
  </section>



  <section class="ftco-section ">
    <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h2>Latest news from our blog</h2>
        </div>
      </div>
      <div class="row d-flex">

      <?php
include "connection.php";
$all = "select * from Blog";
$result = mysqli_query($con, $all);
$nbr = mysqli_num_rows($result);
for ($i = 0; $i < $nbr; $i++) {
    $row = mysqli_fetch_assoc($result);
    
    echo "<div class=\"col-md-4 d-flex ftco-animate\">";
    echo " <div class=\"blog-entry align-self-stretch\">";
    echo "<a href=\"blog-single.php?img={$row['BlogImage']}&title={$row['BlogTitle']}&cont={$row['BlogContent']}\" class=\"block-20 rounded\" style=\"background-image: url('blogimages/{$row['BlogImage']}');\">
        </a>
        <div class=\"text p-4\">
            <div class=\"meta mb-2\">
                <div><h3 class=\"heading\"><a href=\"blog-single.php?img={$row['BlogImage']}&title={$row['BlogTitle']}&cont={$row['BlogContent']}\">{$row['BlogTitle']}</a></h3></div>
            </div>
            <h3 class=\"heading\"> <a href=\"blog-single.php?img={$row['BlogImage']}&title={$row['BlogTitle']}&cont={$row['BlogContent']}\">{$row['BlogTitle']}</a></h3>";

    
    $s = explode(' ', $row["BlogContent"]);
    $new = ''; // Initialize $new variable
    for ($j = 0; $j < min(36, count($s)); $j++) { // Make sure not to exceed the array length
        $new .= $s[$j] . ' ';
    }
    echo "$new</a></h3>
        </div>
    </div>
</div>";
}
mysqli_close($con);
?>
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