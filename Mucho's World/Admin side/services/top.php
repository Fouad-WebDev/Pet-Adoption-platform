<?php
    require_once '../connection.php';
    $id=$_GET['packageID'];
    $stat=$_GET["value"];
    $sql="UPDATE packages SET display=$stat WHERE packageID='$id'";
    $r=mysqli_query($con,$sql);
    
    header('Location:packages.php');