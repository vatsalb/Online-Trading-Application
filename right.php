<meta http-equiv="refresh" content="10">
<html>
<head>
<link href="css/right.css" rel="stylesheet">
</head>
<body>
<div id="divright">
 <font size="3" color="#357EC7" face="calibri" >
<b><center>NOTICE</center></b>
</font><br>
<br>

<?php
include 'database.php';
	?>
<marquee direction="down" scrollamount="3"><font face="calibri" size="4" color="blue" style="margin-left:3%;">
	<?php
   $query="select * from newsreport";
   $result=mysql_query("$query");
   while($array=mysql_fetch_array($result))
{
	?>
	<p style="margin-left:5%"><?php echo $array['newnews']; ?>
	<?php
}
?>
</font>
</marquee>
</div>
</body>
</html>