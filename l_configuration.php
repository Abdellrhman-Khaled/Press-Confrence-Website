<?php
// start session to save logged in data
session_start();

    $conn = mysqli_connect("localhost", "root", "", "Web_project");
    if (!$conn) {
        echo mysqli_connect_error();
        exit;
    }

    // escape sql injection


    $email=mysqli_escape_string($conn,$_POST['email']);
    $password=sha1($_POST['password']);
    $username = mysqli_escape_string($conn,$_POST['username']);


    // chosing the email that have the password of its own not any password
    $query = "select * from `users4` where `email` = '" . $email . "' and `password` = '" . $password . "' and `username` = '" . $username . "'";
    $result = mysqli_query($conn, $query);

    



// checking if email and password is in database or not
    if($row = mysqli_fetch_assoc($result)){
        // putting id of user and email to make sure later that he's logged in or not
        
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['username']= $row['username'];

        setcookie('user_id', $row['id'], time() + (86400 * 30), '/');

        header("Location: home.php");

        exit;
    }else{
        echo "invalid email or password or username";
        
    }
    // close connecion
    mysqli_free_result($result);
    mysqli_close($conn);
