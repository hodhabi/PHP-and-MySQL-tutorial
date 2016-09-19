<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
include('dbconnect.php');

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

$sql = "select * from user where password='$password' AND username='$username'";
$result = dbcon("CIA2503",$sql);

if ($result->num_rows > 0) {
 $_SESSION['login_user']=$username; // Initializing Session
 header("location: profile.php"); // Redirecting To Other Page
} else {
 $error = "Username or Password is invalid";
}
}
}
?>
