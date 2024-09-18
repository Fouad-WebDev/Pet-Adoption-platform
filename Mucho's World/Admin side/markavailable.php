<?php
require_once 'connection.php';
$PetID=$_GET['PetID'];

$query2="Update  pets  set status='Unavailable' where PetID=$PetID";
$result2= mysqli_query($con, $query2);
header("location:availableAdoption.php");

?>