
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
        

 body {
	 font-family: 'Open Sans', Helvetica, Arial, sans-serif;
	 background: #ededed;
}
 input, button {
	 border: none;
	 outline: none;
	 background: none;
	 font-family: 'Open Sans', Helvetica, Arial, sans-serif;
}
.tip {
	 font-size: 20px;
	/*  margin: 40px auto 50px;*/
	 text-align: center;
}

 .cont {
	 overflow: hidden;
	 position: relative;
	 width: 900px;
	 height: 700px;
	 margin: 0 auto;
	 background: #fff;
}
 .form {
	 position: relative;
	 width: 640px;
	 height: 100%;
	 transition: transform 1.2s ease-in-out;
	 padding: 50px 30px 0;
}
 .sub-cont {
	 overflow: hidden;
	 position: absolute;
	 left: 640px;
	 top: 0;
	 width: 900px;
	 height: 100%;
	 padding-left: 260px;
	 background: #fff;
	 transition: transform 1.2s ease-in-out;
}
 .cont.s--signup .sub-cont {
	 transform: translate3d(-640px, 0, 0);
}
 button {
	 display: block;
	 margin: 0 auto;
	 width: 260px;
	 height: 36px;
	 border-radius: 30px;
	 color: #fff;
	 font-size: 15px;
	 cursor: pointer;
}
 .img {
	 overflow: hidden;
	 z-index: 2;
	 position: absolute;
	 left: 0;
	 top: 0;
	 width: 260px;
	 height: 100%;
	 padding-top: 360px;
}
 .img:before {
	 content: '';
	 position: absolute;
	 right: 0;
	 top: 0;
	 width: 900px;
	 height: 100%;
	 background-image: url('https://media.istockphoto.com/id/1417882544/photo/large-group-of-cats-and-dogs-looking-at-the-camera-on-blue-background.jpg?b=1&s=170667a&w=0&k=20&c=Q-OSb3I9cuoCZT5rm539lIeu23zU3FdFyB35WhL0Kes=');
	 background-size: cover;
	 transition: transform 1.2s ease-in-out;
}
 .img:after {
	 content: '';
	 position: absolute;
	 left: 0;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 background: rgba(0, 0, 0, 0.6);
}
 .cont.s--signup .img:before {
	 transform: translate3d(640px, 0, 0);
}
 .img__text {
	 z-index: 2;
	 position: absolute;
	 left: 0;
	 top: 50px;
	 width: 100%;
	 padding: 0 20px;
	 text-align: center;
	 color: #fff;
	 transition: transform 1.2s ease-in-out;
}
 .img__text h2 {
	 margin-bottom: 10px;
	 color: #fff;
	 font-weight: normal;
}
 .img__text p {
	 font-size: 14px;
	 line-height: 1.5;
}
 .cont.s--signup .img__text.m--up {
	 transform: translateX(520px);
}
 .img__text.m--in {
	 transform: translateX(-520px);
}
 .cont.s--signup .img__text.m--in {
	 transform: translateX(0);
}
 .img__btn {
	 overflow: hidden;
	 z-index: 2;
	 position: relative;
	 width: 100px;
	 height: 36px;
	 margin: 0 auto;
	 background: transparent;
	 color: #fff;
	 text-transform: uppercase;
	 font-size: 15px;
	 cursor: pointer;
}
 .img__btn:after {
	 content: '';
	 z-index: 2;
	 position: absolute;
	 left: 0;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 border: 2px solid #fff;
	 border-radius: 30px;
}
 .img__btn span {
	 position: absolute;
	 left: 0;
	 top: 0;
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 width: 100%;
	 height: 100%;
	 transition: transform 1.2s;
}
 .img__btn span.m--in {
	 transform: translateY(-72px);
}
 .cont.s--signup .img__btn span.m--in {
	 transform: translateY(0);
}
 .cont.s--signup .img__btn span.m--up {
	 transform: translateY(72px);
}
 h2 {
	 width: 100%;
	 font-size: 26px;
	 text-align: center;
}
 label {
	 display: block;
	 width: 260px;
	 margin: 25px auto 0;
	 text-align: center;
}
 label span {
	 font-size: 12px;
	 color: #cfcfcf;
	 text-transform: uppercase;
}
 input {
	 display: block;
	 width: 90%;
	 margin-top: 5px;
	 padding-bottom: 5px;
	 font-size: 16px;
	 border-bottom: 1px solid rgba(0, 0, 0, 0.4);
	 text-align: center;
}
 .forgot-pass {
	 margin-top: 15px;
	 text-align: center;
	 font-size: 12px;
	 color: #cfcfcf;
}
 .submit {
	 margin-top: 40px;
	 margin-bottom: 20px;
	 background: #7aded9;
	 text-transform: uppercase;
}

 .sign-in {
	padding: 17%;
	 transition-timing-function: ease-out;
}
 .cont.s--signup .sign-in {
	 transition-timing-function: ease-in-out;
	 transition-duration: 1.2s;
	 transform: translate3d(640px, 0, 0);
}
 .sign-up {
	 transform: translate3d(-900px, 0, 0);
}
 .cont.s--signup .sign-up {
	 transform: translate3d(0, 0, 0);
}
 .icon-link {
	 position: absolute;
	 left: 5px;
	 bottom: 5px;
	 width: 32px;
}
 .icon-link img {
	 width: 100%;
	 vertical-align: top;
}
table{
 	margin: auto;
 }
 #sign {
	 display: block;
	 margin: 0 auto;
	 width: 260px;
	 height: 36px;
	 border-radius: 30px;
	 color: #fff;
	 font-size: 15px;
	 cursor: pointer;
}
#errormessage {
        display: flex;
        justify-content: center;
        border-radius: 12px;
      }
	  label select.small-dropdown {
  width: 150px; /* Adjust the width as needed */
  padding: 8px;
  border: 1px solid rgba(0, 0, 0, 0.4);
  border-radius: 4px;
  font-size: 14px;
  background-color: #fff;
  margin-top: 5px;
}

/* Styling for dropdown arrow */
label select.small-dropdown::-ms-expand {
  display: none;
}

label select.small-dropdown:focus {
  outline: none;
  border-color: #7aded9;
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
		<span class="navbar-brand" ><span class="flaticon-pawprint-1 mr-2"></span>Mucho's World</span>
	<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fa fa-bars"></span> Menu
	  </button>-->
	 <!--make it to the right--> 
	 <div class="collapse navbar-collapse ml-5" id="ftco-nav">
		<ul class="navbar-nav ml-auto  ">
			<li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="about.php" class="nav-link">About</a></li> <!-- introduction to the team to be added -->
		
			<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
			<li class="nav-item dropdown" >
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				  Product
				</a>
				<ul class="dropdown-menu">
				  <li><a class="dropdown-item" href="Accessories.php">Accessories</a></li>
				  <li><a class="dropdown-item" href="Toys.php">Toys</a></li>
				  <li><a class="dropdown-item" href="Food.php">Food</a></li>
				</ul>
			  </li> <!-- list of products acc toys and food-->
		  <li class="nav-item dropdown" >
		  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			Adoption
		  </a>
		  <ul class="dropdown-menu">
			<li><a class="dropdown-item" href="adopt.php">Adopt </a></li>
			<li><a class="dropdown-item" href="Put for adoption.php">Put for adoption</a></li>
		  </ul>
		</li><!-- list contain put for adoption and adopt-->
		  <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
		  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li> <!--  link into the same inpage at the end  for index page only-->
		<li class="nav-item active"><a href="loginpage.php" class="nav-link">  <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
		  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
		  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
		</svg> </a></li> 
	  </ul>
	  </div>   
	</div> 
  </nav>




<div class="cont ">
  <div class="form sign-in">
	
	<?php 
	if(isset($_GET['from']))
	{
		$from=$_GET['from'];
		/* if(isset($_GET['error'])){
			$error=$_GET['error'];
			echo '<form method="POST" action="Loginconfirmation.php?from='.$from.'&error='.$error.'">';
		}
	else{ */echo '<form method="POST" action="Loginconfirmation.php?from='.$from.'">';}
// }
else{
	echo '<form method="POST" action="Loginconfirmation.php">';
}
?>
    <h2>Welcome back</h2>
    <label>
	<?php if(isset($_GET['error'])){?>
		<div id="errormessage"><p><span class="error"><?php echo  $_GET['error'];?></span></p></div>
		<?php }?>

      <span>Email</span>
      <input type="email" name="email" />
    </label>
    <label>
      <span>Password</span>
      <input type="password" name="password" />
    </label>
    <p class="forgot-pass">Forgot password?</p>
    <input type="submit" class="submit" value="Sign In" id="sign">
</form>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2 color:#fff>New here?</h2>
        <p>Sign up to unlock premium services for your pet!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
		<form method="post" action="signinconfirmation.php">
      <h2>Time to feel like home,</h2>
	  <table>
		<tr>
			<td>
	<label>
	  <span>First name </span>
	  <input type="text" name="Firstname"/>
	</label>
  </td>
  <td>
	<label>
	  <span>Last name</span>
	  <input type="text" name="Lastname"/>
	</label>
  </td>
</tr>
<tr>
	<td>
	<label>
	  <span>Username</span>
	  <input type="text" name="Username" />
	</label>
  </td>
  <td>
	<label>
	  <span>Email</span>
	  <input type="email" name="email" />
	</label>
  </td>
</tr>
<tr>
	<td colspan="2">
	<label>
	  <span>Password</span>
	  <input type="password" name="password" />
	</label>
  </td>
</tr>
<tr>
<td colspan="2" >
	 <label>
	  <span>Phone number</span>
	  <input type="text" name="phone"/>
	</label>
  </td>
  </tr>
  <tr>
  <td>
  <label>
  <select name="gender" class="small-dropdown">
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>
</label>
  </td>
  <td>
	<label>
	<span>Date of Birth</span>
	<input type="date"  name="DOB" id="date"/>
  </label>
</td>
  </tr>
</table>
<br>
      <input type="submit" class="submit" value="Sign Up" id="sign">
</form>
    </div>
  </div>
</div>
 
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script>
	document.querySelector('.img__btn').addEventListener('click', function() {
	document.querySelector('.cont').classList.toggle('s--signup');
	  });
	  
  </script>
    <script>
		  // Get the date input element
		  const dateInput = document.getElementById('date');

		// Get the current date
		const currentDate = new Date().toISOString().split('T')[0];

		// Set the maximum date to the current date
		dateInput.setAttribute('max', currentDate);

		// Add event listener to the date input
		dateInput.addEventListener('input', function() {
 		 // Get the selected date
		  const selectedDate = new Date(dateInput.value);

 		// Compare the selected date with the current date
 		 if (selectedDate > new Date()) {
			// Clear the value if it's a future date
			dateInput.value = '';
  }
});
	  </script>
	
</body>
</html>


