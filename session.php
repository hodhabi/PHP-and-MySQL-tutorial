<?php
include('dbconnect.php');

session_start();// Starting Session
$user_check=$_SESSION['login_user'];
$sql = "select * from user where username='$user_check'";
$result = dbcon("CIA2503",$sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
    $login_session =$row['username'];
    $userType=$row['userType'];
    
    }
}

if(!isset($login_session)){
header('Location: index.php'); // Redirecting To Home Page
}

?>