<html>
 <BODY bgcolor="f0f0f0">

<?php
session_start();
$_SESSION['id']=$_REQUEST['ra'];
?>
<center>
<form>
<br><br><br><br>
 <a href="buy.php"><input type ="button" name="any" value="buy" style="width:80px;height:30px;background-color:orange;border:0px inset #357EC7;border-radius:4px;color:white;background-image: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,0.2));"> </a>
&nbsp;&nbsp;&nbsp;<a href="sell.php">
<input type ="button" name="any" value="sell" style="width:80px;height:30px;background-color:orange;border:0px inset #357EC7;border-radius:4px;color:white;background-image: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,0.2));"> </a>
</form>
</center>
</body>
</html>