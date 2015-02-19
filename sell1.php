<html>
 <BODY bgcolor="f0f0f0">
<font face="calibri" color="black"size="3" >
<?php
session_start();
$qty=$_SESSION['qty'];
$id=$_SESSION['id'];
$money=$_SESSION['money'];
$sellmoney=$_SESSION['sellmoney'];
include 'database.php';
$q1= "select *  from onlinet where company='$id'";
$r1= mysql_query($q1);
while($arr=mysql_fetch_array($r1))
{
$buy=$arr['bp'];
$sell=$arr['sp'];
$sa=$arr['sa'];
}
$buy=$buy-($qty*10);
$sell=$sell-($qty*12);
$sa=$sa+$qty;
$m=$money+$sellmoney;
$q="update onlinet set bp='".$buy."',sp='".$sell."',sa='".$sa."' where company='".$id."'";
$r= mysql_query($q);
if($r){
$q1= "select * from student where email='".$_SESSION['email']."' && company='".$id."' ";
$r1= mysql_query($q1);
$num = mysql_num_rows($r1);
}
if($num!=0)
{
while($arr1=mysql_fetch_array($r1))
{
$sold=$arr1['sold'];
$bought=$arr1['bought'];
$total=$arr1['totalbalance'];
$s=$sold+$qty;
$t=$bought-$s;
$email=$_SESSION['email'];
}
$q2="update student set sold='".$s."',totalbalance='".$t."',money='".$m."' where email='".$_SESSION['email']."' && company='".$id."' ";

$r2= mysql_query($q2);
$q8="update student set money='".$m."' where email='".$_SESSION['email']."'";
$r8= mysql_query($q8);
}
else
{
$q3="update student set sold='".$qty."',money='".$m."',company='".$id."',totalbalance='".$qty."' where email='".$_SESSION['email']."' ";
$r3= mysql_query($q3);
}
if( $r2 || $r3)
{
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