<!DOCTYPE HTML>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#mtable{
    width: 80%;
    border: 2px solid;
    margin-left: 10%;
}
</style>
</head>

<body>
<?php


// Create connection

include("dbconnect.php");

$sql = "SELECT * FROM MyGuests";
$result = dbcon("CIA2503",$sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<div id='mtable'>";
    echo '<table class="table">';
    echo "<th>ID</th><th>Firstname</th><th>Lastname</th>";

    while($row = $result->fetch_assoc()) {
        $x = $row['id'];
        $url = "<a class='btn btn-primary' href='page2.php?id=" . $x . "&fname=" . $row["firstname"] . "&lname=" . $row["lastname"] . "'>";
        echo "<tr class='danger'>";
        echo  "<td>" . $url . $x . "</a>" . "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"]. "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";
echo "<div>";

?>
</body>

