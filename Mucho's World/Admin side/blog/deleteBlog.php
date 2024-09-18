<?php
require_once '../connection.php';
$BlogID=$_GET['BlogID'];

$query2="DELETE FROM Blog where BlogID=$BlogID";
$result2= mysqli_query($con, $query2);
//echo $result2;
header("location:blog.php");

?>

