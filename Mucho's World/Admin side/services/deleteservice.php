<?php
require_once '../connection.php';
$ServiceID=$_GET['ServiceID'];

$query2="DELETE FROM Services where ServiceID=$ServiceID";
$result2= mysqli_query($con, $query2);
//echo $result2;
header("location:Services.php");

?>

