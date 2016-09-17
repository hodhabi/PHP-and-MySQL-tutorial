<?php
include('session.php');
require_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<center>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a class='btn btn-danger' href="logout.php">Log Out</a></b>
</div>
<?php 
if ($userType=="AD")
{
?>


<section>
<div class="container">
<h2>Courses</h2>

<div class="btn-group btn-group-justified">
  <a href="addcourse.php" class="btn btn-primary">Add</a>
  <a href="editCourse.php" class="btn btn-primary">Edit</a>
  <a href="deleteCourse.php" class="btn btn-primary">Delete</a>
  <a href="listCourse.php" class="btn btn-primary">List</a>
  
</div>



<h2>Users</h2>

<div class="btn-group btn-group-justified">
  <a href="newUser.php" class="btn btn-success">Add</a>
  <a href="editUser.php" class="btn btn-success">Edit</a>
  <a href="deleteUser.php" class="btn btn-success">Delete</a>
  <a href="listUser.php" class="btn btn-success">List</a>
  
</div>

<h2>Registeration</h2>

<div class="btn-group btn-group-justified">
  <a href="newCRN.php" class="btn btn-info">Add CRN</a>
  <a href="editCRN.php" class="btn btn-info">Edit CRN</a>
  <a href="deleteCRN.php" class="btn btn-info">Delete CRN</a>
  <a href="listCRN.php" class="btn btn-info">List CRN</a>
  
</div>



<h2>Grades</h2>

<div class="btn-group btn-group-justified">
  <a href="newGrades.php" class="btn btn-danger">Add</a>
  <a href="editGrades.php" class="btn btn-danger">Edit</a>
  <a href="deleteGrades.php" class="btn btn-danger">Submit</a>
  <a href="listGrades.php" class="btn btn-danger">Transcript</a>
  
</div>

</div>

</section>

<hr>
<?php
}
if ($userType=="ST"){
 echo "Student";

}
require_once('footer.php');
?>
</center>
</body>
</html>