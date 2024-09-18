<?php 
session_start();
if(isset($_SESSION['RoleID'])){ ?>

<html>
    <head>
        <title>Add Service</title>
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

<?php
require_once '../connection.php';
$ServiceID = $_GET['ServiceID'];

$query = "Select * from Services where ServiceID =$ServiceID";
$result = mysqli_query($con, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result);
?>
<nav class="navbar navbar-expand-lg navbar-dark  ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    <span class="navbar-brand" ><span class="flaticon-pawprint-1 mr-2"></span>Mucho's World</span>
		 <div class="collapse navbar-collapse ml-5" id="ftco-nav">
	        <ul class="navbar-nav ml-auto  ">
            <li class="nav-item dropdown" >
	        	<li class="nav-item"><a href="availableAdoption.php" class="nav-link">Available adoption</a></li> <!-- introduction to the team to be added -->
                <li class="nav-item"><a href="../product/Products.php" class="nav-link">Products</a></li> <!-- introduction to the team to be added -->
                <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="packages.php" class="nav-link">Packages</a></li>
                <li class="nav-item"><a href="../blog/blog.php" class="nav-link">Blog</a></li>
	         <li class="nav-item"><a href="../contactedby.php" class="nav-link">contacted by</a></li> <!--  link into the same inpage at the end  for index page only-->
             <li class="nav-item"><a href="../order.php" class="nav-link">Orders</a></li>
	      </div>   
	    </div> 
	  </nav>




      <div class="editor">
        <h1>EDIT Services</h1>
    <form method="post" action="updateService.php">
        
        <table id="tooble">
            <tr>
            <input type="hidden" name="ServiceID" size="30" value="<?php echo $row['ServiceID']; ?>" />
                <td>Services Name</td>
                <td>
                    <input type="text" name="ServiceName" size="30" value="<?php echo $row['ServiceName']; ?>" /></td>
            </tr>
            <tr>
                <td>Services Desc</td>
                <td><input type="text" name="ServiceDesc" size="30" value="<?php echo $row['ServiceDesc']; ?>" /></td>
            </tr>
            <tr>
                <td>Services Price</td>
                <td><input type="text" name="ServicePrice" size="30" value="<?php echo $row['ServicePrice']; ?>" /></td>
            </tr>
            <tr>
            
                <td>
                    <input type="submit" value="UPDATE" />
                </td>
            </tr>
        </table>
    </form>
      </div>
    <?php
    include "../connection.php";
    $all = "select * from Services";
    $result = mysqli_query($con, $all);
    $nbr = mysqli_num_rows($result);
    ?>

    <table>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
        <?php
        for ($i = 0; $i < $nbr; $i++) {

            $row = mysqli_fetch_assoc($result);
            echo "<tr>";
            echo "<td>$row[ServiceID]</td>";
            echo "<td>$row[ServiceName]</td>";
            echo "<td>$row[ServiceDesc]</td>";
            echo "<td>$row[ServicePrice]</td>";

            echo "<td><a href='editService.php?ServiceID=$row[ServiceID]'><img src='../edit.svg' alt='edit' width='25px' height='25px'/></a></td>";

            echo "<td><a href='deleteService.php?ServiceID=$row[ServiceID]'><img src='../drop.png' alt='Delete' width='25px' height='25px' /></a></td>";
            echo "</tr>";
        }
        echo "</table>";

        ?>

    <?php
}
?>
<div id="ftco-loader" class="show fullscreen"></div>


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
    
    header("Location:../../index.php");

}
?>