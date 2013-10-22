<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>Mennakshi Night Canteen NIT-T</title>
	<meta name="verify-v1" content="8Fcv4zU4kEpmqFt1JgX8TNobfjaWLWwA7/MpesGh5B4=" />
	<link rel="stylesheet" media="screen" type="text/css" href="home_includes/a.css" />
	<script type="text/javascript" src="home_includes/mootools.js"></script><script type="text/javascript" src="home_includes/core.js"></script>
	<!--[if IE]><meta http-equiv="imagetoolbar" content="no" /><meta http-equiv="X-UA-Compatible" content="IE=8" /><![endif]-->
	<link rel="stylesheet" type="text/css" href="login_includes/screen_2.css">
	<link rel="stylesheet" type="text/css" href="login_includes/dropdown.css">
	<script type="text/javascript" src="login_includes/helpers.js"></script>
	<script type="text/javascript" src="login_includes/date.js"></script>
	<script type="text/javascript" src="login_includes/form.js"></script>   
</head>
<body>
	<div id="menu">
		<h1><a href=""><b>Meenakshi Night Canteen</b></a></h1>
		<div >
			<ul style="font-size:16px; padding:16px 0px 0px 0px">
				<li ><a href="index.php">HOME</a></li><br />
			</ul>
            
		</div>
	</div>
		<div id="cont"><div class="box large left" style="color:white;">
		<h2><b>Meenakshi Night Canteen</b></h2>
		 <form action="checkregistration.php" method="POST">
		 
<legend>User Details</legend>
<div>
<label for="username">Username</label> 
<input type="text" id="username" name="username" value="" required>
</div>
<div>
<label for="password">Password</label> 
<input type="password" id="password" name="password" required>
</div>
<div>
<label for="password2">Retype Password</label> 
<input type="password" id="password2" name="password2" required>
</div>
<div>
<label for="firstname">First Name</label> 
<input type="text" id="firstname" name="firstname" value="" required>
</div>
<div>
<label for="lastname">Last Name</label> 
<input type="text" id="lastname" name="lastname" value="" required>
</div>
<div>
<label for="roll">Roll no.</label> 
<input type="text" id="roll" name="roll" value="" required>
</div> 
<div>
<label for="adr">Hostel Address</label> 
<input type="text" id="adr" name="adr" value="" required >
</div> 
<div>
<label for="mail">Mail Id</label> 
<input type="text" id="mail" name="mail" value="" required>
</div>
<div>
<label for="phone">Contact No.</label> 
<input type="text" id="phone" name="phone" value="" required>
</div> 
<div><button type="submit" id="submit-go" required>Submit</button> </div>
</form> 
		</div>
	</div>	<div id="bg"><div><table cellpadding="0" cellspacing="0"><tr><td><img alt="" src="home_includes/dept road.jpg" /></td></tr></table></div></div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct="UA-2741865-7";urchinTracker();</script>
</body>
</html>