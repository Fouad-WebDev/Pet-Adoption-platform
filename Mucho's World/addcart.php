<?php 
  session_start();
  if(isset($_SESSION['isLoggedIn'])){

    include "connection.php";
    if(isset($_GET['ProductID'])){
        $userID=$_SESSION['UserID'];
        $ProductID=$_GET['ProductID'];
        $from=$_GET['from'];
        $checkQuery = "SELECT * FROM cart WHERE UserID = $userID AND ProductID = $ProductID";
        $result = mysqli_query($con, $checkQuery);
        if(mysqli_num_rows($result) > 0){
            header("Location: $from.php?error=Already Added to Cart.");
        }
        else {
            // Fetch the ProductPrice from the products table
            $fetchProductQuery = "SELECT ProductPrice FROM products WHERE ProductID = '$ProductID'";
            $fetchProductResult = mysqli_query($con, $fetchProductQuery);
            $productRow = mysqli_fetch_assoc($fetchProductResult);
            $ProductPrice = $productRow['ProductPrice'];
        
            // Insert the new item into the cart
            $insertCartQuery = "INSERT INTO cart (UserID, ProductID, Quantity, totalPrice) VALUES ('$userID', '$ProductID', 1,0)";
            $insertCartResult = mysqli_query($con, $insertCartQuery);
        
            // Update the totalPrice in the cart table
            $updateTotalPriceQuery = "UPDATE cart SET totalPrice = totalPrice + '$ProductPrice' WHERE UserID = '$userID'";
            $updateTotalPriceResult = mysqli_query($con, $updateTotalPriceQuery);
        
            header("Location: $from.php?error=Added To Cart!");
        }
    }
}
    ?>