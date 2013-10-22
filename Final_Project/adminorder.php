<?php
include ('connection.php');
session_start();

$query = 'select * from order1 where Status = '.'"Not Delivered"';
$query_run = mysql_query($query) or die(mysql_error());
$num = mysql_num_rows($query_run);
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


	
	<div id="content">
    <table cellspacing="0">
    <tr><th>Order No.</th><th>Name</th><th>Address</th><th>Amount</th></tr>
	<?php
	for($i=0;$i<$num;$i++)
	{
	$r = mysql_result($query_run,$i,'RollNo');
	$qi = "select * from user where RollNo =".$r;
	$res = mysql_query($qi) or die(mysql_error());
	$rr = mysql_fetch_array($res);
	?>
    <tr><td><?php echo mysql_result($query_run,$i,'OrderNO'); ?></td><td><?php echo $rr['FirstName']; ?></td><td><?php echo $rr['Address']; ?></td><td><?php echo mysql_result($query_run,$i,'Total'); ?></td></tr>
    
	<?php 
	}
	?>
	</table>
	</div>
	<center>
	<br />
<form action="orderdetails.php" method="POST">
<label>Order No.</label>
<input type="text" name="orderno" required />
<button><input type="submit" name="submit" value="CHECK" required /></button>
</form>
<br />
<a href ="logout.php"><button><input type="button" name="logout" value="LOGOUT" required /></button></a>
</center>

<!--<div id="bg"><div><table cellpadding="0" cellspacing="0"><tr><td><img alt="" src="home_includes/dept road.jpg" /></td></tr></table></div></div>-->
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct="UA-2741865-7";urchinTracker();</script>
</body>
</html>