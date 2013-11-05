<?php
session_start();
include("conn.php");
if(isset($_SESSION["id"]))
{}
else
header("location:login.php");
?>

<?php
for($j=1;$j<=30;$j++)
{
	$rs = mysql_query("select * from record1");
	if($row = mysql_fetch_array($rs))
	{
		while($row = mysql_fetch_array($rs))
		{
			$day = $row['day'];
		}
		$day++;
		if($day>30)
		{
			$_SESSION['co']=true;
			header("location:login.php");
		}
	}
	else
	{
		$day=1;
	}
}
?>


<!--<html>
<body>
<!-- #BeginDate format:Am1m -->NOVEMBER <?php echo $day; ?>, 2013  <!-- #EndDate -->
</br>
</br>
<form action="login.php"><input type="submit" value="Logout"/></form>

</body>
</html>-->
<?php
 



include("conn.php");
for($j=1;$j<=89;$j++)
{
if(isset($_POST["pa$j"]))
{
	$i[$j] = $_POST["pa$j"]; 

	if($i[$j]=="p$j")
	{
		if($j<10)
	{
		mysql_query("insert into record1 values('$day','20511200$j',1)") or die(mysql_error());
		?>
<?php }
		else
{
		mysql_query("insert into record1 values('$day','2051120$j',1)") or die(mysql_error());
		
?>
<?php }
	}
	else
	{
		if($j<10) {
		mysql_query("insert into record1 values('$day','20511200$j',0)") or die(mysql_error());
		
?>
<?php }
		else {
mysql_query("insert into record1 values('$day','20511200$j',0)") or die(mysql_error());
		
?>
<?php	}
}
}
}

header("location:test.php");

?>

