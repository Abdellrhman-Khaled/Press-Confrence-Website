<?php
session_start();
// connect to databse
$conn = mysqli_connect("localhost","root","","Web_project"); // domain - username of the db - pw of db - db name 
if(!$conn){
    echo mysqli_connect_error();
    exit;
}
// saving input into variables

$username = mysqli_escape_string($conn,$_POST['username']); 
$email = mysqli_escape_string($conn,$_POST['email']);
$password = sha1(mysqli_escape_string($conn,$_POST['password']));
$phone= mysqli_escape_string($conn,$_POST['phone']);

// insert data to database
if (mysqli_query($conn, "INSERT INTO `users4` (`username`,`email`,`password`,`phone`) VALUES 
('" . $username . "','" . $email . "','" . $password . "','" . $phone . "')")){

    header("location: login.php");
}
else{
    echo mysqli_error($conn);
}

//close connection

mysqli_close($conn);
