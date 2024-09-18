<?php
require_once "connection.php";
if(isset($_POST['name']) && ($_POST['name']!="")
&& isset($_POST['email']) && ($_POST['email']!="")
&& isset($_POST['subject']) && ($_POST['subject']!="")
&& isset($_POST['message']) && ($_POST['message']!=""))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];     
    $query="Insert into contactus values('', '$name', '$email','$subject' ,'$message','unread')";
    $result=mysqli_query($con,$query);
    if(!$result){
        echo "Failed to send Mail";
    }
    Else{
        header('location:contact.php');
    }
}
?>