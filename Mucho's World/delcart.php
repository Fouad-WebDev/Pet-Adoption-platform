<?php 
  session_start();
  if(isset($_SESSION['isLoggedIn'])){

    include "connection.php";
    if(isset($_GET['ProductID'])){
        $userID=$_SESSION['UserID'];
        $ProductID=$_GET['ProductID'];
        $checkQuery = "SELECT * FROM cart WHERE UserID = $userID AND ProductID = $ProductID";
        $result = mysqli_query($con, $checkQuery);
        if(mysqli_num_rows($result) > 0){
            $query = "delete from cart where userID = $userID AND ProductID = $ProductID";
            $q = mysqli_query($con, $query);
            header("Location: checkout.php");
        }
    }
}
    ?>