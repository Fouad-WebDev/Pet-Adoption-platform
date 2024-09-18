<?php

require_once 'connection.php';
if(isset($_POST['Firstname']) && ($_POST['Firstname']!="")
        && isset($_POST['Lastname']) && ($_POST['Lastname']!="")
        && isset($_POST['Username']) && ($_POST['Username']!="")
        && isset($_POST['email']) && ($_POST['email']!="")
        && isset($_POST['phone']) && ($_POST['phone']!="")
        && isset($_POST['gender']) && ($_POST['gender']!="")
        && isset($_POST['email']) && ($_POST['email']!="")
        && isset($_POST['password']) && ($_POST['password']!="")
     )
{
    $Firstname=$_POST['Firstname'];
    $Lastname=$_POST['Lastname'];
    $Username=$_POST['Username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $DOB=$_POST['DOB'];

    $query="SELECT * from Users where Email='$email' OR UserName ='$Username' OR Phone='$phone'";
    $result= mysqli_query($con, $query);
    $nbr=mysqli_num_rows($result);
    if($nbr>0)
    {
        session_start();
        $_SESSION['loginerror']=0;
        $_SESSION['signinerror']=1;
        header('location:loginpage.php');
    }
    else{
        $query2="Insert into Users values('','$Firstname','$Lastname','$Username','$email','$password','$DOB',' $phone','$gender','1')";
        $result2=mysqli_query($con, $query2);
        if(!$result2)
        {
            session_start();
            $_SESSION['loginerror']=0;
            $_SESSION['signinerror']=1;
            header('location:loginpage.php');
        }
        else{
            session_start();
            $_SESSION['readytologin']=1;
        header('location:index.php');}
    }
}
?>