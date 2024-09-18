<?php 
 error_reporting(E_ALL);
ini_set('display_errors', 1);
include "connection.php";
  $all ="update pets set status = 'unavailable' where pets.PetID ='".$_GET['PetID']."'";
  $result = mysqli_query($con , $all); 
  if ($result!=0){
    $query="select * from pets natural join users where pets.PetID='".$_GET['PetID']."'";
    $res = mysqli_query($con, $query);
    $pet = mysqli_fetch_assoc($res);
     session_start();
        $_SESSION['pUserName']=$pet['UserName'];
        $_SESSION['pEmail']=$pet['Email'];
        $_SESSION['pPhone']=$pet['Phone'];
  }
 header("location: adopt-single.php?PetID=".$pet['PetID']."&pname=".$pet['PetName']."&page=".$pet['Age']."&psex=".$pet['Sex']."&pcas=".$pet['Castrated']."&pinfo=".$pet['MoreInfo']."&ptype=".$pet['petType']."&puser=".$pet['UserName']."&img=".$pet['petImage']);
?>