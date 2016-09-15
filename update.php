<?php

// This file update a give record using the primery key id.




include("dbconnect.php");
include("upload.php");


if(uploadFile($_FILES["fileToUpload"]["name"],$_FILES["fileToUpload"]["tmp_name"],$_FILES["fileToUpload"]["size"])==true)
{
$sql = "UPDATE MyGuests SET firstname = '" . $_POST['firstname'] . 
"',lastname = '" . $_POST['lastname'] . "', filename='" . $_FILES["fileToUpload"]["name"] . "' WHERE id = " . $_POST['id'];

$result = dbcon("CIA2503",$sql);

header('Location: index.php'); 
}
?>
