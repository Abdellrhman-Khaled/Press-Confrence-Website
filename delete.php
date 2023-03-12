<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "Web_project");
if (!$conn) {
    echo mysqli_connect_error();
    exit;
}

$id=$_SESSION['id'];

$query="UPDATE users4 SET `gender` = NULL , `tickets` = NULL WHERE `id` = $id";
if(mysqli_query($conn,$query)){
    echo "deleted sucessfully";
    sleep(5);
    header("Location: register.php");
}
?>