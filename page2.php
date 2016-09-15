<?php
   include("dbconnect.php");
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
</HEAD>
<BODY>
<FORM action="update.php" method="post">

<input name="id" type="text" value ="<?php echo $_GET['id']; ?>">
<br><input name="firstname" type="text" value ="<?php echo $_GET['fname']; ?>">
<br><input name="lastname" type="text" value ="<?php echo $_GET['lname']; ?>">

<br><input name = "submit" type="submit" value="submit">
</form>

</BODY>
</HTML>


