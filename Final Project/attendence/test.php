<?php
session_start();
if(isset($_SESSION["id"]))
echo "Attendence taken by ---> ".$_SESSION["id"];
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
<!--<p align="center" class="style1"><!-- #BeginDate format:Am1m -->October 22, 2013  0:15<!-- #EndDate --></p>-->
 

<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style1">&nbsp;</p>
<form action="show.php" method="post">

  <table width="252" border="1" align="center">
    <?php for($i=1;$i<=89;$i++) { ?>
    <tr>
      <td width="164">2051120<?php
	  		if($i<10)
	  		echo "0".$i;
			else
			echo $i;
	   ?> </td>
      <td width="72">P<input type="radio" name="pa<?php echo $i; ?>" id="pa<?php echo $i; ?>" value="p<?php echo $i; ?>"/>
	  A<input type="radio" name="pa<?php echo $i; ?>" id="pa<?php echo $i; ?>" value="a<?php echo $i; ?>"/>
	  
	  
    </tr>
<?php } ?>
  </table>
  
  
<label> </label>

  <div align="center">
    <input type="submit" name="Submit2" value="Submit" />
   
  </div>
</form>

<a href="showall.php"><input type="button" value="SHOW ALL ATTENDENCE"></a>
<a href="s.php"><input type="button" value="SEARCH"></a>
<a href="login.php"><input type="button" value="logout"></a>
</body>

</html>
