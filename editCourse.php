<?php
include('session.php');
require_once('header.php');

if(isset($_POST['submit'])) 
{ 
    $code = $_POST['code'];
    $title = $_POST['ctitle'];
    $credit = $_POST['ccredit'];
    $status = $_POST['cstatus'];

$sql = "UPDATE `course` SET `Course title` = '$title', `credits` = '$credit', `Status` = '$status' WHERE `course`.`code` = '$code';";

echo $sql;
$result = dbcon("CIA2503",$sql);

header('Location: profile.php'); 

}

?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .container{
   
   width:80%;
   border:1px solid;
   padding: 10px;
   margin-top: 20px;
   background: lightgreen;

  }
  </style>
</head>
<body>

<?php

$ccode = $_GET['code'];

$sql = "select * from course where code='$ccode'";
$result = dbcon("CIA2503",$sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc()
?>
   

<div class="container">
<div class="form-group">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input class="form-control" type="text" name="code" value="<?php echo $row['code']; ?>"><br>
   <input class="form-control" type="text" name="ctitle" value="<?php echo $row['Course title']; ?>"><br>
   <input class="form-control" type="number" name="ccredit" value="<?php echo $row['credits']; ?>"><br>

   <select class="form-control" name="cstatus">
    <option value="1o">Active</option>
    <option value="saab">In-active</option>
  </select>

   <input class="btn btn-default" type="submit" name="submit" value="Add"><br>
</form>
</div>
</div>
<?php
}
?>
</body>
</html>