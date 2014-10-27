<?php

include('config.php');

$username = $_POST['username'];
$password = $_POST['password'];
$hashedPassword = md5($_POST['password']);

/* check the database */
$sql = "SELECT * FROM login WHERE username='".$username."' AND password='".$hashedPassword."'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result)) {
    session_start();
    $_SESSION['user'] = $username;
    header("location:admin.php");
} else {
    header("location:login.php?error=1");
}
