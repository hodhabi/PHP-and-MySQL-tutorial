<?php
   include("dbconnect.php");
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
</HEAD>
<BODY>
<FORM action="update.php" method="post" enctype="multipart/form-data">

<input name="id" type="text" value ="<?php echo $_GET['id']; ?>">
<br><input name="firstname" type="text" value ="<?php echo $_GET['fname']; ?>">
<br><input name="lastname" type="text" value ="<?php echo $_GET['lname']; ?>">
<br>    <input type="file" name="fileToUpload" id="fileToUpload">
<br><input name = "submit" type="submit" value="submit">
</form>

</BODY>
</HTML>


