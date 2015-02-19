<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML>
 <HEAD>
  <TITLE> Online Trading </TITLE>
 <link href="css/main.css" rel="stylesheet">
   </HEAD>
     <?php
   /* website created by vatsal bhawsinka and vaani kaur ahluwalia */
session_start();
 if(isset( $_SESSION['email']))
 {
	 ?>
<frameset rows="10%,85%,5%" border="0" BORDERCOLOR="black">
   <frame src="header.php" name="top" >
<frameset cols="60%,40%" border="0" BORDERCOLOR="black">
<frame src="left.php" name="left" >
<frameset rows="50%,50%" border="0" BORDERCOLOR="black">
<frame src="right.php" name="right" >
<frame src="rightdown.php" name="rightdown" >
</frameset>
</frameset>
<frame src="footer.html" name="down" >
</frameset> 
<?php
 }
	 else
	 {
	 header("location:login.html"); 
	 }
?>

 </BODY>
</HTML>
