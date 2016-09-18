<?php
include('session.php');

$sql = "select * from course";
$result = dbcon("CIA2503",$sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
    echo $row['code'];
    
    }
}


?>
