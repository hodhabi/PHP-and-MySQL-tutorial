<?php
include('login.php'); // Includes Login Script
require_once('mheader.php');

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}

//require_once("header.php")

?>
<!DOCTYPE html>
<html>
<head>
<title>Student Information Systems</title>
<Style>


#ff{
  border: 2px solid;
  width: 80%;
  margin:100px;
  margin-left:10%;
  margin-right:10%;
  padding: 5px;
  text-align: center;
  
}
h1{
  text-align: center;
}

</Style>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 
</head>
<body>



<div id="ff">
<form action="login.php" method="post">

<div class="form-group">
<input class="form-control" name="username" placeholder="username" type="text">
<input class="form-control" name="password" placeholder="**********" type="password">
<input class="btn btn-info" name="submit" type="submit" value=" Login ">

</div>

</form>
</div>
<?php
require_once('footer.php');
?>
</body>
</html>