<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> Admin </TITLE>
  <link href="css/admin.css" rel="stylesheet">
 </HEAD>

<?php
session_start();
   if(isset( $_SESSION['email']))
   {
	   ?>
 <body  background="back1.jpg" bgproperties="fixed" style="background-size:100% 100%;background-repeat:no-repeat"  vlink="orange" alink="orange">
<div id="divadminheader">
<font size="6" color="white" face="calibri" style="margin-left:3%;text-shadow: 0px 1px 0px #999, 0px 2px 0px #888, 
0px 3px 0px #777, 0px 4px 0px #666, 0px 5px 0px #555, 0px 6px 0px #444, 0px 7px 7px #001135;">
Admin Page
</font>
</div><br><br><br><br>
<div id="newsdiv">
 <form name="newsform" method="post" action="news.php">
  <font size="5" color="white" face="calibri" style="margin-left:5%;text-shadow: 0px 1px 0px #999, 0px 2px 0px #888,
  0px 3px 0px #777, 0px 4px 0px #666, 0px 5px 0px #555, 0px 6px 0px #444, 0px 7px 0px #333, 0px 8px 7px #001135;">
<b>Update News</b>
</font><br><br>
<textarea cols="35" rows="6" name="news" style="border: 1px solid  #357EC7;
border-radius: 5px ;text-indent:10px;font-size:100%;font-family:calibri;"></textarea><br><br>
<input type="submit" value="update"style="width:80px;height:50px;background-color:orange;border:0px inset #357EC7;
border-radius:4px;color:white;background-image: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,0.2));"/>
</font>
</form>
 </BODY>
 <?php
   }
 else
 {
header("location: login.html");
 }
?>
</HTML>
