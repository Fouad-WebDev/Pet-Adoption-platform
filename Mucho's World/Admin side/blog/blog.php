<?php
session_start();
if(isset($_SESSION['RoleID'])){
require_once '../connection.php';
if(isset($_POST['BlogTitle']) && ($_POST['BlogTitle']!="")
        && isset($_POST['BlogContent']) && ($_POST['BlogContent']!=""))
{
    $BlogTitle=$_POST['BlogTitle'];
    
    $BlogContent=$_POST['BlogContent'];
    if(!empty($_FILES['BlogImage']['name']) ){
        $BlogImage = $_FILES['BlogImage']['name'];
        $encodedBlogImage = urlencode($BlogImage);
        $BlogImageTemp= $_FILES['BlogImage']['tmp_name'];
        move_uploaded_file($BlogImageTemp,"../../blogimages/".$encodedBlogImage);}
        
    $query="Insert into Blog values('', '$BlogTitle', '$BlogContent','$encodedBlogImage' )";
    //echo $query;
    $result= mysqli_query($con, $query);
    
    if(!$result)
    {
       echo "There was an error in the submission";
    }
}
?>
<html>
    <head>
        <title>Add Blog</title>
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
	        	<li class="nav-item"><a href="../availableAdoption.php" class="nav-link">Available adoption</a></li> <!-- introduction to the team to be added -->
                <li class="nav-item"><a href="../product/Products.php" class="nav-link">Products</a></li> <!-- introduction to the team to be added -->
                <li class="nav-item"><a href="../services/services.php" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="../services/packages.php" class="nav-link">Packages</a></li>
                <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	         <li class="nav-item"><a href="../contactedby.php" class="nav-link">contacted by</a></li> <!--  link into the same inpage at the end  for index page only-->
             <li class="nav-item"><a href="../order.php" class="nav-link">Orders</a></li>
	      </div>   
	    </div> 
	  </nav>
    <div class="editor">
        <h1>Blog</h1>
        <form method="post" action="<?php $PHP_SELF?>" enctype='multipart/form-data'>
            <table id="tooble"> 
                <tr>
                    <td>Blog Title</td>
                    <td><input type="text" name="BlogTitle" size="30" required/></td>
                </tr>
                <tr>
                    <td>Blog Content</td>
                    <td><input type="text" name="BlogContent" size="30" required/></td>
                </tr>
                <tr>
                    <td>Blog Image</td>
                    <td><input type="file" accept="image/*" name="BlogImage" size="30" required/></td>
                </tr>

                <tr>
                    <td>
                       <input type="submit"  value="SUBMIT"/> 
                    </td>
                </tr>
            </table>
        </form>
    </div>
        <?php
    include "../connection.php";
    $all = "select * from Blog";
    $result = mysqli_query($con , $all);
    $nbr= mysqli_num_rows($result);
            ?>
    
        <table border='1'>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Photo</th>
        <th>Edit</th>
        <th>Delete</th>
<?php
        for($i=0; $i<$nbr;$i++)
        {

            $row= mysqli_fetch_assoc($result);
            echo "<tr>";
            echo "<td>$row[BlogID]</td>";
            echo "<td>$row[BlogTitle]</td>";
            echo "<td>$row[BlogContent]</td>";
            echo "<td><img src='../../blogimages/$row[BlogImage]' alt='soura' width='50px' height='50px'/></td>";
          

            echo "<td><a href='editBlog.php?BlogID=$row[BlogID]'><img src='../edit.svg' alt='edit' width='25px' height='25px'/></a></td>";

            echo "<td><a href='deleteBlog.php?BlogID=$row[BlogID]'><img src='../drop.png' alt='Delete' width='25px' height='25px'/></a></td>";
            echo "</tr>";
        }
         echo "</table>";
        
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