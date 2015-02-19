<html>
 <BODY bgcolor="f0f0f0">
<font face="calibri" color="black"size="3" >

<?php
session_start();
$qty=$_SESSION['qty'];
$id=$_SESSION['id'];
$money=$_SESSION['money'];
$moneyleft=$_SESSION['moneyleft'];
include 'database.php';
$q1= "select *  from onlinet where company='$id' ";
$r1= mysql_query($q1);
while($arr=mysql_fetch_array($r1))
{
$buy=$arr['bp'];
$sell=$arr['sp'];
$sa=$arr['sa'];
}
$buy=$buy+($qty*10);
$sell=$sell+($qty*5);
$sa=$sa-$qty;
  
 
$q="update onlinet set bp='".$buy."',sp='".$sell."',sa ='".$sa."' where company='".$id."'";
$r= mysql_query($q)or die(mysql_error());
if($r)
{

$q2= "select * from student where email='".$_SESSION['email']."' && company='".$id."' ";
$r2= mysql_query($q2) or mysql_error();
$num = mysql_num_rows($r2);
}
if($num!=0)
{
while($arr2=mysql_fetch_array($r2))
{
$sold=$arr2['sold'];
$bought=$arr2['bought'];
$total=$arr2['totalbalance'];
$b=$bought+$qty;
$t=$b-$sold;
$email=$_SESSION['email'];

$q5="update student set bought='".$b."',totalbalance='".$t."',money='".$moneyleft."' where email='".$_SESSION['email']."' && company='".$id."' ";
$r5= mysql_query($q5);
$q8="update student set money='".$m."' where email='".$_SESSION['email']."'";
$r8= mysql_query($q8);
}
}
else
{
$q="update student set bought='".$qty."',money='".$moneyleft."',company='".$id."',totalbalance='".$qty."' where email='".$_SESSION['email']."' ";
$r= mysql_query($q);
}
if($r || $r5){
?>
<script>
	    alert("Transaction was Successful");
		window.location=" left.php";
	</script>
	<?php
}
else
{
?>
<script>
	    alert("Transaction was Unsuccessful");
		window.location=" left.php";
	</script>
	<?php
}
?>



