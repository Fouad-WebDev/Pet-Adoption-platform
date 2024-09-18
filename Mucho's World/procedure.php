<?php
session_start();
$UserID = $_SESSION['UserID'];
$transactionCompleted = false;
require "connection.php";

if (isset($_POST["subs"])) {
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  if (isset($_POST["address"])) {
    $address = $_POST["address"];
  } else {
    $address = null;
  }
  $country = $_POST["country"];
  $state = $_POST["state"];
  $paymentMethod = $_POST["paymentMethod"];

  // Insert billing information
  $q = "INSERT INTO billing_information VALUES('', '$UserID', '$firstName', '$lastName', '$address', '$country', '$state', '$paymentMethod')";
  $qQuery = mysqli_query($con, $q);

  if (!$qQuery) {
    echo "Error inserting billing information: " . mysqli_error($con);
  } else {
    // Get the generated BillingInfoID
    $billingID = mysqli_insert_id($con);

    // Insert order into the orders table
    $order = "INSERT INTO orders (`UserID`, `BillingInfoID`, `order_date`) VALUES ($UserID, $billingID, NOW())";
    $orderResult = mysqli_query($con, $order);

    if ($orderResult) {
      $orderID = mysqli_insert_id($con); // Get the generated OrderID

      // Insert order items into the order_items table
      $orderItem = "INSERT INTO order_items (`OrderID`, `ProductID`, `quantity`, `totalPrice`)
        SELECT
          $orderID,
          ProductID,
          quantity,
          totalPrice
        FROM cart
        WHERE UserID = $UserID";
      $orderItemResult = mysqli_query($con, $orderItem);

      if ($orderItemResult) {
        // Delete cart items after successful order insertion
        $delete = "DELETE FROM cart WHERE UserID = $UserID";
        $deleteQuery = mysqli_query($con, $delete);

        if (!$deleteQuery) {
          echo "Error deleting cart items: " . mysqli_error($con);
        } else {
          $transactionCompleted = true;
        }
      } else {
        echo "Error inserting order items: " . mysqli_error($con);
      }
    } else {
      echo "Error inserting order: " . mysqli_error($con);
    }
  }
}
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
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .mycpawcolor {
      color: #00fbb4;
    }

    #lastp {
      font-family: serif;
    }

    .mybadgecolor {
      background-color: #00fbb4
    }

    .specialcolor {
      background-color: #00fbb4;
      border-color: #00fbb4;
    }
  </style>
</head>

<body class="bg-light">
  <?php if ($transactionCompleted) : ?>
    <div class="alert alert-success" role="alert">
      Transaction completed successfully! Thank you for your purchase.
    </div>
  <?php endif; ?>
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
          <li class="nav-item active"><a href="checkout.php" class="nav-link"> <img src="images/shopping-cart.png" alt="" width="25pt" height="25pt"> </a></li>
          <?php
          if (isset($_SESSION['isLoggedIn'])) { ?>
            <li class="nav-item"><a href="logout.php?logout" class="nav-link"> <img src="images/logout.png" alt="" width="25pt" height="25pt"> </a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <!--proceed start-->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">

        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <!-- <span class="badge badge-secondary badge-pill mybadgecolor">3</span> -->

        </h4>
        <ul class="list-group mb-3">
          <?php
          require "connection.php";

          $query = "SELECT *
            FROM cart fm
            JOIN products m ON fm.ProductID = m.ProductID
            WHERE fm.UserID = $UserID";
          $result = mysqli_query($con, $query);

          if (mysqli_num_rows($result) > 0) {
          ?>
            <ul class="list-group mb-3">
              <?php
              while ($fetch = mysqli_fetch_assoc($result)) {
              ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0"><?php echo $fetch['ProductName']; ?></h6>
                    <small class="text-muted"><?php echo $fetch['ProductDesc']; ?></small>
                    <br /> <!-- Add a line break here to separate description and quantity -->
                    <span class="text-muted">Quantity: <?php echo $fetch['quantity']; ?></span>
                  </div>
                  <span class="text-muted">$<?php echo $fetch['ProductPrice'] * $fetch['quantity']; ?></span>
                </li>
              <?php
              }
              ?>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <?php
                $sql = "SELECT totalPrice FROM cart WHERE UserID = $UserID";
                $sqlResult = mysqli_query($con, $sql);
                $sqlFetch = mysqli_fetch_array($sqlResult);
                ?>
                <strong>$<?php echo $sqlFetch['totalPrice']; ?></strong>
              </li>
            </ul>
          <?php
          } else {
            echo '<p class="text-center">Your cart is currently empty.</p>';
          }
          ?>




      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form action='procedure.php' method="POST">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="firstname" name="firstName">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="lastname" name="lastName">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">

              </div>
              <?php
              $U = "SELECT UserName from users WHERE UserID=$UserID ";
              $Uquery = mysqli_query($con, $U);
              $Ufetch = mysqli_fetch_assoc($Uquery);

              ?>
              <input type="text" class="form-control" id="username" placeholder="Username" name="userName" value="<?php echo $Ufetch['UserName'] ?>" disabled>
              <div class="invalid-feedback" style="width: 100%;">
                Your username is required.
              </div>
            </div>
          </div>



          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="address" name="address" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">Country</label>
              <select class="custom-select d-block w-100" id="country" name="country" required>
                <option value="">Choose...</option>
                <option value="Lebanon">Lebanon</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="state">State</label>
              <select class="custom-select d-block w-100" id="state" name="state" required>
                <option value="">Choose...</option>
                <option value="Beirut">Beirut</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
          </div>


          <h4 class="mb-3">Payment</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="COD" name="paymentMethod" type="radio" class="custom-control-input" value="Cash On Delivery" checked onclick="adressOn()">
              <label class="custom-control-label" for="COD">Cash On Delivery</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="PickUp" name="paymentMethod" type="radio" class="custom-control-input" value="Pick Up" onclick="adressOff()">
              <label class="custom-control-label" for="PickUp">Pick Up</label>
            </div>

          </div>

          <hr class="mb-4">
          <div class="input-group">


            <button class="btn btn-primary btn-lg btn-block" type="submit" id="confirmButton" name="subs">Confirm your order</button>

          </div>
        </form>

      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1" id="lastp">&copy; <span class="navbar-brand"><span class="flaticon-pawprint-1 mycpawcolor"></span>Mucho's World</span></p>

    </footer>
  </div>
  <!--proceed end-->

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
  <script>
    function goBackToIndex() {
      // Create a div element for the confirmation message
      var confirmationMessage = document.createElement('div');
      confirmationMessage.setAttribute('id', 'confirmation-message');
      confirmationMessage.innerText = 'Order confirmed successfully';
      confirmationMessage.style.position = 'fixed';
      confirmationMessage.style.top = '50%';
      confirmationMessage.style.left = '50%';
      confirmationMessage.style.transform = 'translate(-50%, -50%)';
      confirmationMessage.style.background = '#00fbb4';
      confirmationMessage.style.color = '#fff';
      confirmationMessage.style.padding = '10px';
      confirmationMessage.style.textAlign = 'center';

      // Append the confirmation message to the body of the page
      document.body.appendChild(confirmationMessage);

      // Remove the confirmation message and redirect after 3 seconds
      setTimeout(function() {
        document.body.removeChild(confirmationMessage);
        // Replace 'index.php' with the URL or file path of the index page
        window.location.href = 'index.php';
      }, 2000);
    }
    var radio2 = document.getElementById('PickUp');
    var addressField = document.getElementById('address');
    var radio1 = document.getElementById('COD')


    // Add an event listener to the radio button
    radio2.addEventListener('change', function() {
      // Check if the radio button is checked
      if (radio2.checked) {
        // Disable the address field
        addressField.disabled = true;
        addressField.value = "";
      } else {
        // Enable the address field
        addressField.disabled = false;
      }
    });
    // Add an event listener to the radio button
    radio1.addEventListener('change', function() {
      // Check if the radio button is checked
      if (radio1.checked) {
        // Disable the address field
        addressField.disabled = false;
      } else {
        // Enable the address field
        addressField.disabled = true;
      }
    });
  </script>

</body>

</html>