<?php
require_once '../connection.php';
if(      isset($_POST['ServiceName']) && ($_POST['ServiceName']!="")
        && isset($_POST['ServiceDesc']) && ($_POST['ServiceDesc']!="")
        &&  isset($_POST['ServicePrice']) && ($_POST['ServicePrice']!=""))
{
    $ServiceID=$_POST['ServiceID'];
    $ServiceName=$_POST['ServiceName'];
    $ServiceDesc=$_POST['ServiceDesc'];
    
    $ServicePrice=$_POST['ServicePrice'];
    $query="UPDATE Services set ServiceName='$ServiceName', ServiceDesc='$ServiceDesc',ServicePrice='$ServicePrice' where ServiceID ='$ServiceID'";
    $result= mysqli_query($con, $query);
    if($result)
    {
        header("location:Services.php");
    }
    else
    {
        header("location:editService.php?ServiceID=$ServiceID");
    }

}
?>