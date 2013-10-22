<?php
include ('connection.php');
session_start();
$ono = $_POST['orderno'];
$_SESSION['order']=$ono;
//echo $ono;
$query = 'select * from order1 where OrderNO ='.$ono;
$res = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($res);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>Meenakshi Night Canteen NIT-T</title>
	<meta name="verify-v1" content="8Fcv4zU4kEpmqFt1JgX8TNobfjaWLWwA7/MpesGh5B4=" />
	<link rel="stylesheet" media="screen" type="text/css" href="home_includes/a.css" />
	<link rel="stylesheet" media="screen" type="text/css" href="home_includes/extra.css" />
	<script type="text/javascript" src="home_includes/mootools.js"></script><script type="text/javascript" src="home_includes/core.js"></script>
	<!--[if IE]><meta http-equiv="imagetoolbar" content="no" /><meta http-equiv="X-UA-Compatible" content="IE=8" /><![endif]-->
	<link rel="stylesheet" type="text/css" href="table.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript">
	$(function() {
		/* For zebra striping */
        $("table tr:nth-child(odd)").addClass("odd-row");
		/* For cell text alignment */
		$("table td:first-child, table th:first-child").addClass("first");
		/* For removing the last border */
		$("table td:last-child, table th:last-child").addClass("last");
	});
	</script>
</head>
<body>
<center>
<?php

for($j=2;$j<26;$j++)
{
	if($row[$j]>0)
	{
		$k=$j-1;
		
		if($k<10){
		$cd="o10".$k;
		$rs = mysql_query("select * from menu1 where Code = ".'\''.$cd.'\'') or die(mysql_error());
		}
		else{
		$cd="o1".$k;
		$rs = mysql_query("select * from menu1 where Code = ".'\''.$cd.'\'') or die(mysql_error());
		}
		$r=mysql_fetch_array($rs);
		echo '<br />'.$r['Name'].' : '.$row[$j];
	}
}
?>

<form action="esehi.php" method="POST">
<br />
<label>Order Delivered</label>
<input type="checkbox" name="status" required />
<button><input type="submit" name="submit" value="Status" required /></button>
</form>
<br />
<a href ="adminorder.php"><button><input type="button" name="order" value="Orders" required /></button></a>
<br />
<br />
<a href ="logout.php"><button><input type="button" name="logout" value="LOGOUT" required /></button></a>
</center>
</body>
</html>