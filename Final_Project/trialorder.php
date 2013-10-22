<?php
include ('connection.php');
session_start();
/*
$qr="select * from user where RollNo = ".$_SESSION['user'];
$resn=mysql_query($qr) or die(mysql_error());
$rown=mysql_fetch_array($resn);
echo 'Welcome ' . $rown['FirstName'].'<br />';
*/



$query = 'select * from order1 where Status = '.'"Not Delivered"';
$query_run = mysql_query($query) or die(mysql_error());
$num = mysql_num_rows($query_run);

for($i=0;$i<$num;$i++)
{
	$r = mysql_result($query_run,$i,'RollNo');
	$qi = "select * from user where RollNo =".$r;
	$res = mysql_query($qi) or die(mysql_error());
	$rr = mysql_fetch_array($res);
	echo '<br />Order  no. : '.mysql_result($query_run,$i,'OrderNO').'<br />';
	echo 'Name : '.$rr['FirstName'].'<br/>';
	echo 'Address : '.$rr['Address'].'<br/>';
	echo 'Bill Amount : '.mysql_result($query_run,$i,'Total').'<br/>';
}

?>

<html>
<head><title>Trial Order</title></head>
<body>
<form action="orderdetails.php" method="POST">
<label>Order No.</label>
<input type="text" name="orderno" required />
<button><input type="submit" name="submit" value="CHECK" required /></button>

</form>
<a href ="logout.php"><button><input type="button" name="logout" value="LOGOUT" required /></button></a>
</body>
</html>