<?php
$stuname=$_REQUEST['name'];
$date=$_REQUEST['birthdate'];
$college=$_REQUEST['college'];
$email=$_REQUEST['email'];
$stumob=$_REQUEST['mobile'];
$password=$_REQUEST['password'];
include 'database.php';
 $query="select email from register where email='$email'"; 
 $result=mysql_query($query)  or die(mysql_error());
 $e=mysql_fetch_array($result);
 if($e['email']==$email)
 {
  ?>
  <script>
	    alert("We Found That you are already Registered User");
		window.location=" register.php";
	</script>
	<?php
 }
 else
 {
include 'database.php';
 $query1="insert into register values('$stuname','$date','$college','$email','$stumob','$password' )";
 $result1=mysql_query($query1)  or die(mysql_error());
if($result1)
{
    $q2="insert into student values('$email','10000','none','0','0','0')";
$r=mysql_query($q2) or die(mysql_errror());
header("location:login.html");

}
else
{
?>
<script>
	    alert("something went wrong");
		window.location=" register.php";
	</script>
	<?php
  }

 }
 ?>