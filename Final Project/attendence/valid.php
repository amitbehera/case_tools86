<?php
session_start();
include("conn.php");
$id = $_POST["id"];
$password = $_POST["password"];

$rs = mysql_query("select * from user_reg where Id='$id' and Pass='$password' ") or die(mysql_error());

if($row = mysql_fetch_array($rs))
{
	$_SESSION["id"]=$id;	
	header("location:test.php");
}
else
{
	header("location:login.php");
}

?>