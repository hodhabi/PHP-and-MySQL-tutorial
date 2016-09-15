<?php

// This file update a give record using the primery key id.




include("dbconnect.php");

$sql = "UPDATE MyGuests SET firstname = '" . $_POST['firstname'] . 
"',lastname = '" . $_POST['lastname'] . "' WHERE id = " . $_POST['id'];

$result = dbcon("CIA2503",$sql);

header('Location: index.php'); 

?>
