<?php
require_once '../connection.php';
if(      isset($_POST['ProductName']) && ($_POST['ProductName']!="")
        && isset($_POST['ProductDesc']) && ($_POST['ProductDesc']!="")
        &&  isset($_POST['ProductPrice']) && ($_POST['ProductPrice']!=""))
{
    $ProductID=$_POST['ProductID'];
    $ProductName=$_POST['ProductName'];
    $ProductDesc=$_POST['ProductDesc'];
    $petType=$_POST['petType'];
    $ProductType=$_POST['ProductType'];
  
    
    $ProductPrice=$_POST['ProductPrice'];
    if(!empty($_FILES['ProductImage']['name'])){
        $ProductImage = $_FILES['ProductImage']['name'];
        $ProductImageTemp= $_FILES['ProductImage']['tmp_name'];
        move_uploaded_file($ProductImageTemp,"../images/".$ProductImage);
        
    }
    $query="UPDATE Products set ProductName='$ProductName', ProductType='$ProductType', ProductDesc='$ProductDesc',ProductPrice='$ProductPrice',ProductImage='$ProductImage' ,petType='$petType' where ProductID ='$ProductID'";
    $result= mysqli_query($con, $query);
    if($result)
    {
        header("location:Products.php");
    }
    else
    {
        header("location:editProduct.php?ProductID=$ProductID");
    }

}
?>