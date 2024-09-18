<?php
require_once '../connection.php';
$ProductID=$_GET['ProductID'];

$query2="DELETE FROM Products where ProductID=$ProductID";
$result2= mysqli_query($con, $query2);
//echo $result2;
header("location:Products.php");

?>
