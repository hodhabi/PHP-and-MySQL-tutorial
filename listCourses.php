<!doctype HTML>
<HTML>
<HEAD>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
 #mtable{
    width: 80%;
    margin-left:10%;
    margin-right:10%;
    margin-top: 40px;
 }

</style>
</HEAD>
<BODY>
<?php

require_once('header.php');
include('session.php');

$sql = "select * from course";
$result = dbcon("CIA2503",$sql);

if ($result->num_rows > 0) {
   echo "<div id='mtable'>";
   echo "<table class='table'>";
   echo "<th>Code</th><th>Course Title</th><th>Credits</th>";
    while($row = $result->fetch_assoc()) {
   $ccode = $row['code'];
   $bt = "<a class='btn btn-success' href='editCourse.php?code=$ccode'>" . "Edit</A>";

    echo "<tr><td>" . $bt . " " . $row['code'] . "</td><td>" . $row['Course title'] . "</td><td>" .  $row['credits'] . "</td></tr>";

   
    }
    echo "</table>";
    echo "</div>";
}


?>
</BODY>
</HTML>
