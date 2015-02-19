<html>
<script src="js/sell.js"></script>

 <BODY bgcolor="f0f0f0">
<font face="calibri" color="black"size="3" >
<?php
session_start();
if(!(isset($_REQUEST['q']))){
include 'database.php';
$id=$_SESSION['id'];
$q= "select *  from onlinet where company='$id'";
$r= mysql_query($q);
?>
Welcome,Current Selling price of stock is:
<?php
while($arr=mysql_fetch_array($r))
{
echo $arr['sp'];
}
?>
<br>
<form method= "POST" action="sell.php" name="proceed" onsubmit="return validatesell();" >
<label>
Quantity </label><br><input type="text" name = "q">
<input type=submit value= "Proceed" style="width:80px;height:30px;background-color:orange;border:0px inset #357EC7;
border-radius:4px;color:white;background-image: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,0.2));">
</form>
<?php
}
if(isset($_REQUEST['q']))
{
$qty=$_REQUEST['q'];
$id=$_SESSION['id'];
$_SESSION['qty'] = $qty;
include 'database.php';
$q=" select * from student where email='".$_SESSION['email']."' && company='".$id."'";
$r=mysql_query($q);
while($arr1=mysql_fetch_array($r))
{
$b=$arr1['totalbalance'];
$money=$arr1['money'];
$_SESSION['money']=$money;
}
if($b< $qty)
{
?>
<script>
	    alert("U don't have enough shares to sell");
		window.location=" left.php";
	</script>
	<?php
}
else
{
$q1= "select *  from onlinet where company='$id'";
$r1= mysql_query($q1);
while($arr=mysql_fetch_array($r1))
{
$sell=$arr['sp'];
}
echo("Total Price of selling is ".$sell*$qty);
$_SESSION['sellmoney']= ($sell*$qty);
if(isset($_REQUEST['q'])){
?>
<form method="GET" action="sell1.php"  >
<input type=submit value = "Sell" style="width:80px;height:30px;background-color:orange;border:0px inset #357EC7;
border-radius:4px;color:white;background-image: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,0.2));"><br> 
</form>
<?php
}
}
}
?>
