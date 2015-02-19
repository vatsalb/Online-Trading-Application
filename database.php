<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("registration",$con) or die(mysql_error());
?>