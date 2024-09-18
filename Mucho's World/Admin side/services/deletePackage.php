<?php
require_once '../connection.php';
$packageID=$_GET['packageID'];

$query2="DELETE FROM packages where packageID=$packageID";
$result2= mysqli_query($con, $query2);
//echo $result2;
header("location:packages.php");

?>

