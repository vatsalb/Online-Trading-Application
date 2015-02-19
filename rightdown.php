<meta http-equiv="refresh" content="10">
<html>
<title>
user
</title>
<head>
 <link href="css/rightdown.css" rel="stylesheet">
</head>
<body bgcolor="f0f0f0">
<div id="user">
<font size="3" color="#357EC7" face="calibri" >
<b><center>USER ACCOUNT</center></b>
</font><br>
	<table style="width:90%;border:0px inset #357EC7;border-radius:0px;"cellpadding="0" cellspacing="0" >
	<th class="th">Money</th>
	<th class="th">Company</th>
    <th class="th">bought</th>
	<th class="th">sold</th>
	<th class="th">totalShares</th>	
	<font face="calibri">
<?php
session_start();
$table=$_SESSION['email'];
include 'database.php';
$query="select * from student where email='".$table."' && company!='none'";
$result=mysql_query($query);
while($array=mysql_fetch_array($result))
{
?>
<tr>
<td class="td"><?php echo $array['money']; ?></td>
<td class="td"><?php echo $array['company']; ?></td>
<td class="td"><?php echo $array['bought']; ?></td>
<td class="td"><?php echo $array['sold']; ?></td>
<td class="td"><?php echo $array['totalbalance']; ?></td>
</tr>
<?php
}
?>
</table>
</div>
</body>
</html>