<?php
session_start();
$UserID = $_SESSION['UserID']; ?>
<?php
require "connection.php";

if (isset($_POST["sub"])) {
  $totalCost = floatval($_POST['total_cost']);
  $quantityUpdates = array();

  foreach ($_POST as $key => $value) {
    if (strpos($key, 'qty_') === 0) {
      $productID = substr($key, strlen('qty_'));
      $quantity = intval($value);
      $quantityUpdates[$productID] = $quantity;
    }
  }

  foreach ($quantityUpdates as $productID => $quantity) {
    $updateQuantityQuery = "UPDATE cart SET quantity = $quantity WHERE UserID = $UserID AND ProductID = $productID";
    $updateResult = mysqli_query($con, $updateQuantityQuery);

    if (!$updateResult) {
      echo "Error updating quantity for product ID " . $productID . ": " . mysqli_error($con);
    }
  }
  // Calculate the new total cart price
  $newTotalCartPrice = 0;
  foreach ($quantityUpdates as $productID => $quantity) {
    $getProductPriceQuery = "SELECT ProductPrice FROM products WHERE ProductID = $productID";
    $getProductPriceResult = mysqli_query($con, $getProductPriceQuery);

    if ($getProductPriceResult && mysqli_num_rows($getProductPriceResult) > 0) {
      $productData = mysqli_fetch_assoc($getProductPriceResult);
      $productPrice = $productData['ProductPrice'];
    } else {
      // Handle error if the product price retrieval fails
      echo "Error retrieving product price for product ID $productID";
    }
    $newTotalCartPrice += $productPrice * $quantity;
  }

  // Update the total cart price in the database
  $updateTotalPriceQuery = "UPDATE cart SET totalPrice = $newTotalCartPrice WHERE UserID = $UserID";
  $updateTotalPriceResult = mysqli_query($con, $updateTotalPriceQuery);

  if (!$updateTotalPriceResult) {
    echo "Error updating total cart price: " . mysqli_error($con);
  }
  header("Location: procedure.php");
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
  <link rel="stylesheet" href="css/style2.css">
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
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
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
  <!-- cart items cart-->
  <div class="container">
    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
      <?php
      require "connection.php";


      $query = "SELECT *
                    FROM cart fm
                    JOIN products m ON fm.ProductID = m.ProductID
                    WHERE fm.UserID = $UserID";
      $result = mysqli_query($con, $query);

      $totalCartPrice = 0; // Initialize the total cart price
      ?>
      <form action='checkout.php' method='POST'>
        <?php
        if (mysqli_num_rows($result) > 0) {
          while ($fetch = mysqli_fetch_assoc($result)) {
            echo '<tr>
            <td>
              <div class="myflex2">
                <img src="productimages/' . $fetch['ProductImage'] . '" class="floater" alt="">
                <div>
                <br>
                <p>' . $fetch['ProductName'] . '</p>
                  <small> price:' . $fetch['ProductPrice'] . '$</small></br>
                  
                  <a href="delcart.php?ProductID=' . $fetch['ProductID'] . '">remove</a>
                </div>
              </div>
            </td>';
        ?>

            <td><input id="qty_<?php echo $fetch['ProductID']; ?>" type="number" name="qty_<?php echo $fetch['ProductID']; ?>" value="1" data-product-id="<?php echo $fetch['ProductID']; ?>" data-product-price="<?php echo $fetch['ProductPrice']; ?>"></td>

            <td id="totalPriceColumn_<?php echo $fetch['ProductID']; ?>"> <?php echo $fetch['ProductPrice']; ?>$</td>
            </tr>
          <?php


            // $totalCartPrice += $fetch['ProductPrice']; // Add product price to the total cart price
          }
          $totalPriceQuery = "SELECT SUM(ProductPrice) AS TotalPrice FROM cart fm JOIN products m ON fm.ProductID = m.ProductID WHERE fm.UserID = $UserID";
          $totalPriceResult = mysqli_query($con, $totalPriceQuery);
          $totalPriceRow = mysqli_fetch_assoc($totalPriceResult);
          $totalPrice = $totalPriceRow['TotalPrice'];


          ?>

    </table>
  </div>
  <div class="mytableflex container">
    <div>
      <table>
        <tr>
          <td>total</td>
          <td id="totalCartPrice">$<?php echo "$totalPrice" ?></td>

          <input type="hidden" id="totalCostInput" name="total_cost" value="0">

        </tr>
      </table>
      <button class="mybutton" type="submit" name="sub">Proceed to checkout</button>
      </form>
    </div>
  <?php  } else {
          echo '
    <p>Your cart is empty. Add items to proceed to checkout.</p>
  ';
        } ?>
  </div>


  <script>
    // Function to calculate and update the total cart price
    function updateTotalPrice() {
      var totalCartPrice = 0;
      var quantityInputs = document.querySelectorAll('input[id^="qty_"]');

      quantityInputs.forEach(function(input) {
        var productID = input.getAttribute("data-product-id");
        var productPrice = parseFloat(input.getAttribute("data-product-price"));
        var productQuantity = parseFloat(input.value);
        var totalPriceColumn = document.getElementById("totalPriceColumn_" + productID);

        var totalItemPrice = productPrice * productQuantity;
        totalPriceColumn.textContent = "$" + totalItemPrice.toFixed(2);
        totalCartPrice += totalItemPrice;
      });

      var totalCartPriceElement = document.getElementById("totalCartPrice");
      totalCartPriceElement.textContent = "$" + totalCartPrice.toFixed(2);
    }

    // Add event listeners to quantity inputs
    var quantityInputs = document.querySelectorAll('input[id^="qty_"]');
    quantityInputs.forEach(function(input) {
      input.addEventListener("input", function() {
        updateTotalPrice();
      });
    });

    // Initial calculation
    updateTotalPrice();
  </script>
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
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
    // function goToProceed() {

    //   window.location.href = 'procedure.php'; // hay kent 3amela b javscript hay ente eza shi 3maliya b header php @AYA!!!!! THANK YOU
    // }
  </script>
</body>

</html>