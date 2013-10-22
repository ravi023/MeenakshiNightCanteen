<?php
include ('connection.php');
session_start();
$uname=$_POST['username'];
$pwd=$_POST['password'];
$q='select * from user where UserId = "'.$uname.'" AND Password = "'.$pwd.'"';
$res=mysql_query($q) or die(mysql_error());
$num=mysql_num_rows($res);
if($num>0)
{
$_SESSION['success']=TRUE;
$row=mysql_fetch_array($res);
$_SESSION['user']=$row['RollNo'];
if($uname=='admin')
header('location:adminorder.php');
else
header('location:n_home.php');
}
else
{
$_SESSION['fail']=TRUE;
header('location:login.php');
}
?>