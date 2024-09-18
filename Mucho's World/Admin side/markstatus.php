<?php
require_once 'connection.php';
$ConctatID=$_GET['ConctatID'];

$query2="Update  contactus  set Status='Read' where ConctatID=$ConctatID";
$result2= mysqli_query($con, $query2);
//echo $result2;
header("location:contactedby.php");

?>