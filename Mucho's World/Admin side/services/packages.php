<?php
session_start();
if(isset($_SESSION['RoleID'])){
require_once '../connection.php';
    if(isset($_POST["packageName"]) && $_POST["discount"]){
        $packageName=$_POST['packageName'];
        $query="select * from packages where packageName='$packageName'";
        $res=mysqli_query($con,$query);
        if(mysqli_num_rows($res)>0){
            echo 'name already there';
        }
        else{
            $q="Insert into packages values('','$packageName',0)";
            $r=mysqli_query($con,$q);

            if(!$r){
                echo "error bruh";
            }
        }
        $discount=$_POST['discount'];
        $totalcost=$_POST['total_cost'];
        $selectedServices=$_POST['services'];
        $packID="select * from packages ORDER BY packageID DESC LIMIT 1";
        $fun=mysqli_query($con,$packID);

        if($fun){
            $frow=mysqli_fetch_array($fun);
            $packageID=$frow["packageID"];
            foreach ($selectedServices as $serviceID) {
                // Perform data validation and sanitization before executing the query
                $serviceID = intval($serviceID);


                // Insert the values into the table
                $sql = "INSERT INTO package_services values($packageID,$serviceID,$discount,$totalcost)";
                $final=mysqli_query($con,$sql);
        }
        
    }
}

?> 
<html>
    <head>
        <title>Add service</title>
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
                <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="packages.php" class="nav-link">Packages</a></li>
                <li class="nav-item"><a href="../blog/blog.php" class="nav-link">Blog</a></li>
	         <li class="nav-item"><a href="../contactedby.php" class="nav-link">contacted by</a></li> <!--  link into the same inpage at the end  for index page only-->
             <li class="nav-item"><a href="../order.php" class="nav-link">Orders</a></li>
	      </div>   
	    </div> 
	  </nav>
    <div class="editor">
        <h1>Packages</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label>Enter the package name:<input type="text" name="packageName" ></label>
        <?php
        $query2 = "select * from services";
        $result2= mysqli_query($con,$query2);
        $rowNum = mysqli_num_rows($result2);
        for($i=1;$i<=$rowNum;$i++){
            $row=mysqli_fetch_array($result2);
            echo"<label><input type='checkbox' name='services[]' class='service' data-cost='$row[ServicePrice]' value='$row[ServiceID]'>$row[ServiceName]</label>";
            echo"              ";
        }
        
        
        
        
        ?>
        <h2>Total Cost:</h2>
        <div id="totalCost">$0</div>

        <!-- Hidden input field to store the total cost -->
        <input type="hidden" id="totalCostInput" name="total_cost" value="0">

        <!-- Input field for entering the percentage discount -->
        <label for="discount">Discount (%):</label>
        <input type="number" id="discount" name="discount" min="0" max="100" value="0">

        <!-- Add a button to submit the form -->
        <button type="submit">Save Total Cost</button>
    </form>
    <script src="cost.js"></script>
    </div>
        <?php
    include "../connection.php";
    $all = "select * from services";
    $result = mysqli_query($con , $all);
    $nbr= mysqli_num_rows($result);
            ?>
    
        
<?php
      
         $disq = "SELECT *
         FROM packages p
         JOIN package_services ps ON p.packageID = ps.packageID
         JOIN services s ON ps.ServiceID = s.ServiceID";
         

    $dis = mysqli_query($con, $disq);
        ?>
   <?php
// Assuming you have the database connection and data retrieval code above

// Step 3: Display the data on the web page
$current_package_id = null;
$service_names = array();

echo '<table border="1">';
echo '<tr>';
echo '<th>Package Name</th>';
echo '<th>Service Names</th>';
echo '<th>Discount</th>';

echo '<th>Price After Discount</th>';
echo '<th>Display</th>';
echo '</tr>';

while ($row = mysqli_fetch_assoc($dis)) {
    if ($current_package_id != $row['packageID']) {
        // Print the previous row before starting a new package
        if ($current_package_id !== null) {
            echo '<tr>';
            echo '<td>' . $previous_row['packageName'] . '</td>';
            echo '<td>' . implode(', ', $service_names) . '</td>';
            echo '<td>' .$previous_row['discount']. '%' . '</td>';
            echo '<td>' . '$'.$previous_row['finalPrice'] . '</td>';
            echo '<td><input type="checkbox" class="package-checkbox" data-package-id="' . $previous_row['packageID'] . '" data-initial-value="' . $previous_row['display'] . '"></td>';
            echo "<td><a href='deletePackage.php?packageID=$previous_row[packageID]'><img src='../drop.png' alt='Delete' width='25px' height='25px'/></a></td>";
            echo '</tr>';
            $service_names = array(); // Reset the service names for the next package
        }

        $current_package_id = $row['packageID'];
    }

    // Store the service names in an array for each package
    $service_names[] = $row['ServiceName'];
    $previous_row = $row;
}

// Print the last row after the loop ends
if ($current_package_id !== null) {
    echo '<tr>';
    echo '<td>' . $previous_row['packageName'] . '</td>';
    echo '<td>' . implode(', ', $service_names) . '</td>';
    echo '<td>' . $previous_row['discount'] . '%' . '</td>';
    echo '<td>' . '$'.$previous_row['finalPrice'] . '</td>';
    echo '<td><input type="checkbox" class="package-checkbox" data-package-id="' . $previous_row['packageID'] . '" data-initial-value="' . $previous_row['display'] . '"></td>';
    echo "<td><a href='deletePackage.php?packageID=$previous_row[packageID]'><img src='../drop.png' alt='Delete' width='25px' height='25px'/></a></td>";
   
    echo '</tr>';
}

echo '</table>';
?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const checkboxes = document.querySelectorAll(".package-checkbox");
        
        checkboxes.forEach(checkbox => {
            const initialValue = checkbox.getAttribute("data-initial-value");
            
            // Set the initial state of the checkbox
            checkbox.checked = initialValue === '1';

            checkbox.addEventListener("change", function() {
                const packageID = this.getAttribute("data-package-id");
                const isChecked = this.checked;
                
                // Determine the value to send based on the checkbox state
                const valueToSend = isChecked ? 1 : 0;

                // Replace 'https://example.com' with the URL of the modify page
                const modifyURL = `top.php?packageID=${packageID}&value=${valueToSend}`;

                // Redirect to the modify URL
                window.location.href = modifyURL;
            });
        });
    });
</script>





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