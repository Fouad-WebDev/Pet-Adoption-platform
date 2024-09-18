<?php
require_once '../connection.php';
if(      isset($_POST['BlogTitle']) && ($_POST['BlogTitle']!="")
        && isset($_POST['BlogContent']) && ($_POST['BlogContent']!=""))
{
    $BlogID=$_POST['BlogID'];
    $BlogTitle=$_POST['BlogTitle'];
    $BlogContent=$_POST['BlogContent'];
    
   
    if(!empty($_FILES['BlogImage']['name'])){
        $BlogImage = $_FILES['BlogImage']['name'];
        $encodedBlogImage = urlencode($BlogImage);
        $BlogImageTemp= $_FILES['BlogImage']['tmp_name'];
        move_uploaded_file($BlogImageTemp,"../../blogimages/".$encodedBlogImage);
        
    }
    
    $query="UPDATE Blog set BlogTitle='$BlogTitle', BlogContent='$BlogContent',BlogImage='$encodedBlogImage'  where BlogID ='$BlogID'";
    $result= mysqli_query($con, $query);
    if($result)
    {
        header("location:blog.php");
    }
    else
    {
        header("location:editBlog.php?BlogID=$BlogID");
    }

}
?>