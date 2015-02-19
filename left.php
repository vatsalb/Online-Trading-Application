<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<meta http-equiv="refresh" content="100">
<HTML>
<head>
 <link href="css/header.css" rel="stylesheet">
</head>
  <?php
include 'database.php';
$query="select * from onlinet";
$result=mysql_query("$query");
?>
<BODY bgcolor="f0f0f0">
 <div id="left">
 <font face="calibri">
	<table style="width:90%;margin-left:1.5%;border:1px inset #357EC7;border-radius:0px;"cellpadding="2" cellspacing="0" >
	<th class="th" >Company</th>
	<th class="th">Buying Price</th>
	<th class="th">Selling Price</th>
	<th class="th">Lots Available</th>
	<?php
while($array=mysql_fetch_array($result))
{
	?>
		<tr>
	<td class="td">
	<?php 
	$company=$array['company'];
	echo $array['company']; 
	?></td>
    <td class="td"><?php echo $array['bp']; ?></td>
	<td class="td"><?php echo $array['sp']; ?></td>
    <td class="td"><?php echo $array['sa']; ?></td>
	    </tr>
	<?php
 }
	?>
</table><br>
<b>Select a company to trade with shares of:</b>
<br><br>
	<form method = "POST" action="next.php" >
	<table cellspacing="9" cellpadding="5">
	<tr>
<td><input type="radio" name='ra' value="ongc">ONGC </td>
<td><input type="radio" name="ra" value="hpcl">HPCL</td>
<td><input type="radio" name="ra" value="reliancepower">RELIANCE POWER</td></tr>
<tr>
<td><input type="radio" name='ra' value="relianceindustries">RELIANCE INDUSTRIES</td>
<td><input type="radio" name="ra" value="merskoil">MERSK OIL </td>
<td><input type="radio" name="ra" value="adaniport">ADANI PORT </td></tr>
<tr>
<td><input type="radio" name='ra' value="gold">GOLD</td>
<td><input type="radio" name="ra" value="silver"> SILVER</td>
<td><input type="radio" name="ra" value="crudeoil"> CRUDE OIL</td></tr>
<tr>
<td><input type="radio" name='ra' value="gammon infra">GAMMON INFRA</td>
<td><input type="radio" name="ra" value="gmr infra">GMR INFRA</td>
<td><input type="radio" name="ra" value="jetairways">JET AIRWAYS</td></tr>
<tr>
<td><input type="radio" name="ra" value="lufthansa">LUFTHANSA</td>
</tr>

</table><br>
<input type ="submit" value="Next" style="width:80px;height:30px;background-color:orange;border:0px inset #357EC7;border-radius:4px;
color:white;background-image: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,0.2));"> 
</form>
<br>
  </div>
 </BODY>
</HTML>
