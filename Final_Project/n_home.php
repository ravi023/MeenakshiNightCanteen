<?php
include ('connection.php');
session_start();
$q='select * from user where RollNo = '.$_SESSION['user'];
$res=mysql_query($q) or die(mysql_error());
$row=mysql_fetch_array($res);
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
</head>
<body>
	<div id="menu">
		<h1><a href=""><b>Meenakshi Night Canteen</b></a></h1>
		<div >
			<ul style="font-size:16px; padding:6px 0px 0px 0px">
				<li><a href="#"><?php echo $row['FirstName'];?></a></li><br />
				<li><a href="logout.php">Logout</a></li>
			</ul>
            
		</div>
	</div>
	<div id="cont">
		<div class="box large left" style="color:white;">
		<h2><b>Meenakshi Canteen</b></h2>
		</div>
		
		<form action="naya.php" method="POST">
		<div class="box2 large2 left2">
		<fieldset>
			<legend>Quantity</legend>
				<input type="text" name="q1"  id="q1">	
			<br/>	
				<input type="text" name="q2" id="q2">
			<br/>
				<input type="text" name="q3"  id="q3">	
			<br/>
				<input type="text" name="q4"  id="q4">	
			<br/><br/><br/>
				<input type="text" name="q5"  id="q5">	
			<br/>
				<input type="text" name="q6"  id="q6">	
			<br/>
				<input type="text" name="q7"  id="q7">	
			<br/>
				<input type="text" name="q8"  id="q8">	
			<br/><br/><br/>
				<input type="text" name="q9"  id="q9">	
			<br/>
				<input type="text" name="q10"  id="q10">	
			<br/>
				<input type="text" name="q11"  id="q11">	
			<br/>
				<input type="text" name="q12"  id="q12">	
			<br/>
		</fieldset>
		</div>
		 	
		
		<div class="box1 large1 left1">
		<fieldset>
			<legend>Roti</legend>
				<input type="checkbox" name="Parotta" value="o101" id="Parotta">
			<label for="Parotta">Parotta</label>
			<br/>	
				<input type="checkbox" name="Naan" value="o102" id="Naan">
			<label for="Naan">Naan</label>
			<br />
				<input type="checkbox" name="ButterNaan" value="o103" id="Butter Naan">
			<label for="ButterNaan">Butter Naan</label>
			<br/>
				<input type="checkbox" name="ButterRoti" value="o104" id="Butter Roti">
			<label for="ButterRoti">Butter Roti</label>
			<br/>
		</fieldset>
		<br/>
		<fieldset>
			<legend>Dosai</legend>
			
				<input type="checkbox" name="Ghee" value="o105" id="Ghee">
			<label for="Ghee">Ghee</label>
			<br/>	
				<input type="checkbox" name="Onion" value="o106" id="Onion">
			<label for="Onion">Onion</label>
			<br />
				<input type="checkbox" name="Egg" value="o107" id="Egg">
			<label for="Egg">Egg</label>
			<br/>
				<input type="checkbox" name="Masala" value="o108" id="Masala">
			<label for="Masala">Masala</label>
			<br/>
		</fieldset>
		<br/>
		<fieldset>
			<legend>Veg</legend>
			
				<input type="checkbox" name="PBM" value="o109" id="PBM">
			<label for="PBM">Panner Butter Masala</label>
			<br/>	
				<input type="checkbox" name="GM" value="o110" id="GM">
			<label for="GM">Gobi Manchurian</label>
			<br />
				<input type="checkbox" name="MK" value="o111" id="MK">
			<label for="MK">Malai Kofta</label>
			<br/>
				<input type="checkbox" name="Dal" value="o112" id="Dal">
			<label for="Dal">Dal Fry</label>
			<br/>
		</fieldset>
		
		</div>
		
		<div class="box3 large3 left3">
		<fieldset>
			<legend>Chicken</legend>
	
				<input type="checkbox" name="Barbecue" value="o113" id="Barbecue">
			<label for="Barbecue">Barbecue</label>
			<br/>	
				<input type="checkbox" name="Grill" value="o114" id="Grill">
			<label for="Grill">Grill</label>
			<br />
				<input type="checkbox" name="Tandoori" value="o115" id="Tandoori">
			<label for="Tandoori">Tandoori</label>
			<br/>
				<input type="checkbox" name="CLP" value="o116" id="CLP">
			<label for="CLP">Chicken Loli Pop</label>
			<br/>
		</fieldset>
		<br/>
		<fieldset>
			<legend>Cold Drink</legend>
				<input type="checkbox" name="Coke" value="o117" id="Coke">
			<label for="Coke">Coke</label>
			<br/>	
				<input type="checkbox" name="Slice" value="o118" id="Slice">
			<label for="Slice">Slice</label>
			<br />
				<input type="checkbox" name="Dew" value="o119" id="Dew">
			<label for="Dew">Dew</label>
			<br/>
				<input type="checkbox" name="Fanta" value="o120" id="Fanta">
			<label for="Fanta">Fanta</label>
			<br/>
		</fieldset>
		<br/>
		<fieldset>
			<legend>Soup</legend>
				<input type="checkbox" name="Tomato" value="o121" id="Tomato">
			<label for="Tomato">Tomato</label>
			<br/>	
				<input type="checkbox" name="Corn" value="o122" id="Corn">
			<label for="Corn">Sweet Corn</label>
			<br />
				<input type="checkbox" name="HotnSour" value="o123" id="HotnSour">
			<label for="HotnSour">HotnSour</label>
			<br/>
				<input type="checkbox" name="Chicken" value="o124" id="Chicken">
			<label for="Chicken">Chicken</label>
			<br/>
		</fieldset>
		</div>
		
		<div class="box4 large4 left4">
		<fieldset>
			<legend>Quantity</legend>
				<input type="text" name="q13"  id="q13">	
			<br/>	
				<input type="text" name="q14" id="q14">
			<br/>
				<input type="text" name="q15"  id="q15">	
			<br/>
				<input type="text" name="q16"  id="q16">	
			<br/><br/><br/>
				<input type="text" name="q17"  id="q17">	
			<br/>
				<input type="text" name="q18"  id="q18">	
			<br/>
				<input type="text" name="q19"  id="q19">	
			<br/>
				<input type="text" name="q20"  id="q20">	
			<br/><br/><br/>
				<input type="text" name="q21"  id="q21">	
			<br/>
				<input type="text" name="q22"  id="q22">	
			<br/>
				<input type="text" name="q23"  id="q23">	
			<br/>
				<input type="text" name="q24"  id="q24">	
			<br/>
		</fieldset>
		</div>
		<div class="box0 large0 left0"><button type="submit" id="submit-go" name="submit">Submit</button></div>
		</form>
	</div>	
	<div id="bg"><div><table cellpadding="0" cellspacing="0"><tr><td><img alt="" src="home_includes/dept road.jpg" /></td></tr></table></div></div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct="UA-2741865-7";urchinTracker();</script>
</body>
</html>