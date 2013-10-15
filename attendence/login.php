<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Page</title>
<style type="text/css">
<!--
.style4 {color: #000000; font-weight: bold; }
.style5 {color: #000000}
body {
	background-color: #C0C0C0;
	background-image: url(14.jpeg);
	background-repeat: no-repeat;
}
body,td,th {
	font-size: large;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<center>
  <u><strong> LOGIN HERE</strong></u>
</center>
<form action="login.php" method="post">
  <table width="253" border="1" align="center">
    <tr>
      <td width="93"><span class="style4">ADMIN ID </span></td>
      <td width="144"><input name="id" type="text" id="id" /></td>
    </tr>
    <tr>
      <td><span class="style4">PASSWORD</span></td>
      <td><input name="password" type="password" id="password" /></td>
    </tr>
    <tr>
      <td colspan="2"><span class="style5">
                 
        <div align="center" class="style5">
          <input name="Submit" type="Submit" value="Sign In" />
        </div>
      </td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
$con =mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('my_db',$con) or die (mysql_error());


if (isset($_POST['Submit']))
	{
	$name=$_POST['id'];
	$pass=$_POST['password'];
	
	
	if($name=='')
	{
	 echo "<script>alert('Please Enter Your Id')</script>";
	 exit();
	}
	if($pass=='')
	{
	 echo "<script>alert('Please Enter Your Password')</script>";
	 exit();
	}
else{
$que="insert into user_reg (Id,Pass) values ('$name','$pass')";
if (mysql_query($que))
	{
	echo"<script>alert('Login sucessful')</script>";
	echo "<script> window.open('home.php','_self')</script>";
	}
	}
	}
?>
