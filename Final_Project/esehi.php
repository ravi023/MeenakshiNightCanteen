<?php
include ('connection.php');
session_start();
$status = $_POST['status'];
if(isset($status))
{
	$uu = 'update order1 set Status = '.'"delivered"'.' where OrderNO = '.$_SESSION['order'];
	mysql_query($uu) or die(mysql_error());
	header('location:adminorder.php');
}
?>