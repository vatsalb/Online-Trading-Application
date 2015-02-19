<html>
<script src="js/buy.js"></script> 
 <BODY bgcolor="f0f0f0">
<font face="calibri" color="black"size="3" >
<?php
session_start();
if(!(isset($_REQUEST['q']))){
include 'database.php';
$id=$_SESSION['id'];

$q= "select bp from onlinet where company='$id' ";
$r= mysql_query($q);
?>
Welcome,Current Buying price of stock is:
<?php
while($arr=mysql_fetch_array($r))
{
echo $arr['bp'];
}
?>
<br>
<form method= "POST" action="buy.php" name="proceedbuy" onsubmit="return validatebuy()">

Quantity <br><input type=text name = "q">
<input type=submit value= "Proceed" style="width:80px;height:30px;background-color:orange;border:0px inset #357EC7;border-radius:4px;color:white;background-image: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,0.2));">
</form>
<?php
}
$id=$_SESSION['id'];
include 'database.php';
$q= "select bp,sa from onlinet where company='$id' ";
	$r= mysql_query($q);
if(isset($_REQUEST['q'])){
$qty=$_REQUEST['q'];
$_SESSION['qty'] = $qty;
while($arr=mysql_fetch_array($r))
{
$buy=$arr['bp'];
$extra=$arr['sa'];
}
if($qty > $extra)
{
?>
<script>
alert("please enter correct amount");
window.location=" left.php";
</script>
<?php
}
else
{

echo("Total cost to you is ".$buy*$qty);
echo("<br>");
$email=$_SESSION['email'];
$q10= "select money from student where email='$email' ";
$r10= mysql_query($q10);
while($ae=mysql_fetch_array($r10))
{
$money=$ae['money'];
}
if($money < ($buy*$qty))
{
?>
<script>
alert("the shares are too costly for u");
window.location=" left.php";
</script>
<?php
}
else
{
$moneyleft=$money-($buy*$qty);
$_SESSION['money']=$money;
$_SESSION['moneyleft']=$moneyleft;
echo("<br>Your money left is ".$moneyleft);
if(isset($_REQUEST['q'])){
?>
<form method="GET" action="buy1.php">
<input type=submit value = "Buy" style="width:80px;height:30px;background-color:orange;border:0px inset #357EC7;
border-radius:4px;color:white;background-image: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,0.2));"><br> 
</form>
<?php
}
}
}
}
?>
