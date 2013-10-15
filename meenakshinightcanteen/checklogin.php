<?php
include ('connection.php');
session_start();
$uname=$_POST['username'];
$pwd=$_POST['password'];
$q='select * from meenakshi where UserId = "'.$uname.'" AND Password = "'.$pwd.'"';
$res=mysql_query($q);
$num=mysql_num_rows($res);
if($num>0)
{
$_SESSION['success']=TRUE;
$_SESSION['user']=$uname;
header('location:home.php');
}
else
{
$_SESSION['fail']=TRUE;
header('location:login.php');
}
?>