<!DOCTYPE html>
<html lang="en">

<head>
	<title>Mucho's World </title>
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
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
					<li class="nav-item"><a href="checkout.php" class="nav-link"> <img src="images/shopping-cart.png" alt="" width="25pt" height="25pt"> </a></li>
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
					<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-0 bread">Pricing</h1>
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
				<div class="col-md-4 ftco-animate">
					<div class="block-7">
						<div class="img" style="background-image: url(images/pricing-1.jpg);"></div>
						<div class="text-center p-4">
							<span class="excerpt d-block">Personal</span>
							<span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mos</sub></span>

							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check mr-2"></span>5 Dog Walk</li>
								<li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
								<li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
								<li><span class="fa fa-check mr-2"></span>Free Supports</li>
							</ul>

							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="block-7">
						<div class="img" style="background-image: url(images/pricing-2.jpg);"></div>
						<div class="text-center p-4">
							<span class="excerpt d-block">Business</span>
							<span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mos</sub></span>

							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check mr-2"></span>5 Dog Walk</li>
								<li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
								<li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
								<li><span class="fa fa-check mr-2"></span>Free Supports</li>
							</ul>

							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="block-7">
						<div class="img" style="background-image: url(images/pricing-3.jpg);"></div>
						<div class="text-center p-4">
							<span class="excerpt d-block">Ultimate</span>
							<span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mos</sub></span>

							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check mr-2"></span>5 Dog Walk</li>
								<li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
								<li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
								<li><span class="fa fa-check mr-2"></span>Free Supports</li>
							</ul>

							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row d-md-flex justify-content-end">
				<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
					<h2 class="mb-4">Free Consultation</h2>
					<form action="#" class="appointment">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">Select services</option>
												<option value="">Cat Sitting</option>
												<option value="">Dog Walk</option>
												<option value="">Pet Spa</option>
												<option value="">Pet Grooming</option>
												<option value="">Pet Daycare</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Your Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Vehicle number">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-calendar"></span></div>
										<input type="text" class="form-control appointment_date" placeholder="Date">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-clock-o"></span></div>
										<input type="text" class="form-control appointment_time" placeholder="Time">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
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



</body>

</html>