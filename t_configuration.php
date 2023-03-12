<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "Web_project");
if (!$conn) {
    echo mysqli_connect_error();
    exit;
}

$username = mysqli_escape_string($conn,$_POST['username2']);
$email = mysqli_escape_string($conn, $_POST['email2']);
$tickets = mysqli_escape_string($conn,$_POST['tickets']);
$gender = mysqli_escape_string($conn,$_POST['gender']);
$age = mysqli_escape_string($conn, $_POST['age']);
$country = mysqli_escape_string($conn, $_POST['country']);
$university = mysqli_escape_string($conn, $_POST['university']) ;
$college = mysqli_escape_string($conn, $_POST['college']);
$major = mysqli_escape_string($conn, $_POST['major']);
$level = mysqli_escape_string($conn,$_POST['levell']);



$id = $_SESSION['id']; 



if($_SESSION['email'] === $email && $_SESSION['username'] === $username){
    if (mysqli_query($conn," UPDATE `users4` SET  tickets = '$tickets' , age = '$age' 
    , gender = '$gender' , country = '$country' , university = '$university'
    , college = '$college' , major = '$major' , levell = '$level' WHERE id = '$id' ")) {
        header("Location: r_users.php");
    }else{
        echo "something went wrong";
    }
}else{
    echo "please type the name and email like you logged in with";
}

mysqli_close($conn);
?>