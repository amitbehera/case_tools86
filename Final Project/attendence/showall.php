<?php
session_start();
if(isset($_SESSION["id"]))
{}
else
header("location:login.php");
include("conn.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #0000CC}
body {
	background-image: url(colorful_lines_and_gray_background-wallpaper-1366x768.jpg);
}
.style2 {color: #0000CC; font-weight: bold; }
-->
</style>
</head>

<body bgcolor="#999999">
<h1 align="center" class="style2">ATTENDENCE </h1>

 

<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style1">&nbsp;</p>
<form action="test.php" method="post">

  <table width="252" border="1" align="center">
    <?php for($i=1;$i<=89;$i++) { 
	$total=0;
	$present=0;
?>
    <tr>
      <td width="164">2051120<?php
	  		if($i<10)
	  		echo "0".$i;
			else
			echo $i;
	   ?> </td>
<?php
	$rs = mysql_query("select * from record1");
	while($row = mysql_fetch_array($rs))
	{
			if($i<10)
	  		{
				$ro = "20511200"."$i";
				if($row['rollno']==$ro)
				{
					$total++;
					if($row['status']==1)
						$present++;
				}
			}
			else
			{
				$ro = "2051120"."$i";
				if($row['rollno']==$ro)
				{
					$total++;
					if($row['status']==1)
						$present++;
				}
			}
	}	
?>
      <td width="72"><?php echo $present.":".$total; ?></td>
	 <td width="72"><?php 
			if($present>=(3*$total/4))
				echo "VG";
			if($present>=(1*$total/2))
	  			echo "G";
			else
				echo "S";
		?>
	 </td> 
    </tr>
<?php } ?>
  </table>
  
  
<label> </label>

  <div align="center">
    <input type="submit" name="Submit2" value="Submit" />
   
  </div>
</form>

<a href="test.php"><input type="button" value="BACK"></a>
<a href="login.php"><input type="button" value="logout"></a>
</body>

</html>
