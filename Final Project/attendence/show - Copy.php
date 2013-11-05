<?php
session_start();
include("conn.php");
if(isset($_SESSION["id"]))
echo "Attendence taken by ---> ".$_SESSION["id"];
else
header("location:login.php");
?>

<html>
<body>
<!-- #BeginDate format:Am1m -->October 22, 2013  0:17<!-- #EndDate -->
</br>
</br>
<form action="login.php"><input type="submit" value="Logout"/></form>

</body>
</html>
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
		echo "20511200".$j."----> present \n";
		?><br/>
<?php }
		else
{
		echo "2051120".$j."----> present \n";
?><br/>
<?php }
	}
	else
	{
		if($j<10) {
		echo "20511200".$j."----> absent \n";
?><br/>
<?php }
		else {
		echo "2051120".$j."----> absent \n";
?><br/>
<?php	}
}
}
}



?>

