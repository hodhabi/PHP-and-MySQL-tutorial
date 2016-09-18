<?php
include('session.php');
require_once('header.php');

if(isset($_POST['submit'])) 
{ 
    $code = $_POST['code'];
    $title = $_POST['ctitle'];
    $credit = $_POST['ccredit'];
    $status = $_POST['cstatus'];

$sql = "INSERT INTO course (`code`, `Course title`, `credits`, `Status`) VALUES ('" . $code . "', '" . $title . "', '" . $credit . "', '" . $status . "')";

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
<div class="container">
<div class="form-group">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input class="form-control" type="text" name="code" placeholder="CODE-9999"><br>
   <input class="form-control" type="text" name="ctitle" placeholder="Course Title"><br>
   <input class="form-control" type="number" name="ccredit" placeholder="Credit"><br>

   <select class="form-control" name="cstatus">
    <option value="1o">Active</option>
    <option value="saab">In-active</option>
  </select>

   <input class="btn btn-default" type="submit" name="submit" value="Add"><br>
</form>
</div>
</div>
</body>
</html>