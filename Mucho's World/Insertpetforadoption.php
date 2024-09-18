<?php
require_once 'connection.php';
session_start();
$User = $_SESSION['UserID'];
if (
    isset($_POST['PetName']) && ($_POST['PetName'] != "")
    && isset($_POST['Age']) && ($_POST['Age'] != "")
    && isset($_POST['moreinfo']) && ($_POST['moreinfo'] != "")
) {
    $PetName = $_POST['PetName'];
    $Age = $_POST['Age'];
    $moreinfo = $_POST['moreinfo'];
    $sex = $_POST['sex'];
    $PetType = $_POST['PetType'];
    $Castrated = $_POST['Castrated'];
    if (!empty($_FILES['PetImage']['name'])) {
        $PetImage = $_FILES['PetImage']['name'];
        $PetImageTemp = $_FILES['PetImage']['tmp_name'];
        move_uploaded_file($ProductImageTemp, "petsimages/" . $PetImage);
    }

    $query = "Insert into pets values('', '$PetName', '$Age','$sex','$Castrated','$PetImage','$moreinfo','$User','Available','$PetType')";
    $result = mysqli_query($con, $query);

    if (!$result) {
        $_SESSION['FailedtoAdd'] = 1;
        header('location:Put for adoption.php');
    } else { {
            $_SESSION['IsOnAdoption'] = 1;
            header('location:index.php');
        }
    }
}
