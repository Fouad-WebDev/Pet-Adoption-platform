<?php

require_once 'connection.php';
if (
    isset($_POST['email']) && $_POST['email'] != "" &&
    isset($_POST['password']) && $_POST['password'] != ""
) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Escape user inputs to prevent SQL injection
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);

    $query = "SELECT * FROM Users WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($con, $query);


    if ($result) {
        $nbr = mysqli_num_rows($result);
        if ($nbr == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['RoleID'] == 1) {
                session_start();
                $_SESSION['UserID'] = $row['UserID'];
                $_SESSION['UserName'] = $row['UserName'];
                $_SESSION['isLoggedIn'] = 1;
                // Check if 'from' parameter is set in the URL
                if (isset($_GET['from'])) {
                    $from = $_GET['from'];
                    header("Location: $from.php");
                    exit;
                } else {
                    header('Location: index.php');
                    exit;
                }
            } else if ($row['RoleID'] == 2) {
                session_start();
                $_SESSION['UserID'] = $row['UserID'];
                $_SESSION['UserName'] = $row['UserName'];
                $_SESSION['isLoggedIn'] = 1;
                $_SESSION['RoleID'] = $row['RoleID'];
                header("Location:Admin side/index.php");
                exit;
            }
        } else {
            header('Location: loginpage.php?error=Incorrect%20Username%20Or%20Password');
            exit;
        }
    }
}
