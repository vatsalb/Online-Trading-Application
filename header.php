<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML>
 <HEAD>
 <link href="css/header.css" rel="stylesheet">
  </HEAD>
 <BODY>
  <div id="divheader">
  <form>
  <a href="out.php" target="_top"><input type="button" class="logout" value="LogOut"></a>
  <font size="6" color="white" face="calibri" style="margin-left:5%;text-shadow: 0px 1px 0px #999, 0px 2px 0px #888, 0px 3px 0px #777,
  0px 4px 0px #666, 0px 5px 0px #555, 0px 6px 0px #444, 0px 7px 0px #333, 0px 8px 7px black">
<b>Online</b>
</font>
<font color="white" face="calibri"style="margin-left:0%;text-shadow: 0px 1px 0px #999, 0px 2px 0px #888, 0px 3px 0px #777, 
0px 4px 0px #666, 0px 5px 0px #555, 0px 6px 0px #444, 0px 7px 0px #333, 0px 8px 7px black;">
<b><font size="6">Trading</font></b></font>
<?php
session_start();
if(isset($_SESSION['email']))
{
	?>
<font size="4" color="white" face="calibri">
<?php $user=$_SESSION['email']; 
}
	?>
Welcome &nbsp;<?php echo $user; ?>

</font>

</form>
 </BODY>
</HTML>
