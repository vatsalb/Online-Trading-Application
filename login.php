 <?php

$loginemail=$_REQUEST['email'];
$loginpass=$_REQUEST['password'];
include 'database.php';
$query="select * from register where email='$loginemail' ";
$result=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_array($result) or die(mysql_error());
if($row['email']==$loginemail && $row['password']==$loginpass)
{
	session_start();
	$_SESSION['email']=$loginemail;
    header("location: main.php");
}
else
{
?>
<script>
	    alert("U have entered wrong email or password");
		window.location="login.html";
	</script>
<?php
}
?>