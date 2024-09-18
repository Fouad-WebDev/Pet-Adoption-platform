<?php 
session_start();
if(isset($_SESSION['RoleID'])){ ?>

<html>
<head>
        <title>Mucho's World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
        table {
            
            margin-left: 10px;
        }
        #tooble{
                margin-top: 70px;
        }

       td, th,  tr {
    border-color: inherit;
    border-style: solid;
    border-width:2;
    text-align: center;
}
h1{
    margin-left: 10px;
    margin-top:10px;
    text-align: left;

}

.editor{
    width: fit-content;
}
    

        

    </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark  ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    <span class="navbar-brand" ><span class="flaticon-pawprint-1 mr-2"></span>Mucho's World</span>
		 <div class="collapse navbar-collapse ml-5" id="ftco-nav">
	        <ul class="navbar-nav ml-auto  ">
            <li class="nav-item dropdown" >
	        	<li class="nav-item"><a href="availableAdoption.php" class="nav-link">Available adoption</a></li> <!-- introduction to the team to be added -->
                <li class="nav-item"><a href="product/Products.php" class="nav-link">Products</a></li> <!-- introduction to the team to be added -->
                <li class="nav-item"><a href="services/services.php" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="services/packages.php" class="nav-link">Packages</a></li>
                <li class="nav-item"><a href="blog/blog.php" class="nav-link">Blog</a></li>
	         <li class="nav-item"><a href="contactedby.php" class="nav-link">contacted by</a></li> <!--  link into the same inpage at the end  for index page only-->
             <li class="nav-item"><a href="order.php" class="nav-link">Orders</a></li>
	      </div>   
	    </div> 
	  </nav>
<?php
require_once "connection.php";
$query="Select * from pets where status='Available'";
$result=mysqli_query($con,$query);
$nbr=mysqli_num_rows($result);

if($nbr==0){
    Echo "<h1> No pets available for adoption</h1>";
}
else {
    ?>
    
        <table border='1'>
        <th>PetID</th>
        <th>PetName</th>
        <th>Age</th>
        <th>Sex</th>
        <th>Castrated</th>
        <th>Image</th>
        <th>MoreInfo</th>
        <th>UserID</th>
        <th>status</th>
        <th>Mark status</th>
<?php
        for($i=0; $i<$nbr;$i++)
        {
            $row= mysqli_fetch_assoc($result);
            echo "<tr>";
            echo "<td>$row[PetID]</td>";
            echo "<td>$row[PetName]</td>";
            echo "<td>$row[Age]</td>";
            echo "<td>$row[Sex]</td>";
            echo "<td>$row[Castrated]</td>";
            echo "<td> <img src='../petsimages/$row[petImage]' width='100px' height='100px'/></td>";
            echo "<td>$row[MoreInfo]</td>";
            echo "<td>$row[UserID]</td>";
            echo "<td>$row[status]</td>";
            echo "<td><a href='markavailable.php?PetID=$row[PetID]'><img src='Availablepet.jpg' alt='edit' width='50px' height='50px'/></a></td>";
            echo "</tr>";
        }
         echo "</table>";
        
    }
    ?>
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-migrate-3.0.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/jquery.animateNumber.min.js"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/jquery.timepicker.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="../js/google-map.js"></script>
<script src="../js/main.js"></script>
</body>
</html>

<?php
} else{
    
    header("Location:../index.php");

}
?>