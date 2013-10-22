<?php
include ('connection.php');
//session_start();
if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password2'])&&isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['roll'])&&isset($_POST['adr'])&&isset($_POST['mail'])&&isset($_POST['phone']))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$rollno=$_POST['roll'];
	$uid=$_POST['username'];
	$pwd=$_POST['password'];
	$pwd2=$_POST['password2'];
	$address=$_POST['adr'];
	$wmail=$_POST['mail'];
	$no=$_POST['phone'];
	if(!empty($fname)&&!empty($lname)&&!empty($rollno)&&!empty($uid)&&!empty($pwd)&&!empty($pwd2)&&!empty($address)&&!empty($wmail)&&!empty($no))
	{
		if($pwd!=$pwd2)
		{
			echo "Password do not match";
		}
		else
		{
			//$query = "SELECT 'UserId' FROM 'user' WHERE 'UserId' = ".$uid;
			$query = 'select UserId from user where UserId = "'.$uid.'"';
			$query_run = mysql_query($query) or die(mysql_error());
			$num = mysql_num_rows($query_run);
			if($num>0)
			{
				echo 'UserId already exist';
			}
			else
			{
				$query= "INSERT INTO `user` VALUES('".mysql_real_escape_string($fname)."','".mysql_real_escape_string($lname)."','".mysql_real_escape_string($rollno)."','".mysql_real_escape_string($uid)."','".mysql_real_escape_string($pwd)."','".mysql_real_escape_string($address)."','".mysql_real_escape_string($wmail)."','".mysql_real_escape_string($no)."')";
				if($query_run = mysql_query($query) or die(mysql_error()))
				{
					//$_SESSION['user']=$uid;
					header('location:login.php');
				}
				else
				{
					echo "Try Again Later";
				}
			}
		}
	}
	else
	{
		echo 'All fields are required';
	}
}
?>
