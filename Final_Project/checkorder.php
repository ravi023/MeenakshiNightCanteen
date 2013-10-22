<?php
  include ('connection.php');
  session_start();
  $q="select * from user where RollNo = ".$_SESSION['user'];
  $resn=mysql_query($q) or die(mysql_error());
  $rown=mysql_fetch_array($resn);
  $rno=$rown['RollNo'];
	$q['o101']=$_POST['q1'];
	$q['o102']=$_POST['q2'];
	$q['o103']=$_POST['q3'];
	$q['o104']=$_POST['q4'];
	$q['o105']=$_POST['q5'];
	$q['o106']=$_POST['q6'];
	$q['o107']=$_POST['q7'];
	$q['o108']=$_POST['q8'];
	$q['o109']=$_POST['q9'];
	$q['o110']=$_POST['q10'];
	$q['o111']=$_POST['q11'];
	$q['o112']=$_POST['q12'];
	$q['o113']=$_POST['q13'];
	$q['o114']=$_POST['q14'];
	$q['o115']=$_POST['q15'];
	$q['o116']=$_POST['q16'];
	$q['o117']=$_POST['q17'];
	$q['o118']=$_POST['q18'];
	$q['o119']=$_POST['q19'];
	$q['o120']=$_POST['q20'];
	$q['o121']=$_POST['q21'];
	$q['o122']=$_POST['q22'];
	$q['o123']=$_POST['q23'];
	$q['o124']=$_POST['q24'];
	

	if (isset($_POST['Parotta'])) {$i[1]=$_POST['Parotta'];}
	if (isset($_POST['Naan'])) {$i[2]=$_POST['Naan'];}
	if (isset($_POST['ButterNaan'])) {$i[3]=$_POST['ButterNaan'];}
	if (isset($_POST['ButterRoti'])) {$i[4]=$_POST['ButterRoti'];}
	if (isset($_POST['Ghee'])) {$i[5]=$_POST['Ghee'];}
	if (isset($_POST['Onion'])) {$i[6]=$_POST['Onion'];}
	if (isset($_POST['Egg'])) {$i[7]=$_POST['Egg'];}
	if (isset($_POST['Masala'])) {$i[8]=$_POST['Masala'];}
	if (isset($_POST['PBM'])) {$i[9]=$_POST['PBM'];}
	if (isset($_POST['GM'])) {$i[10]=$_POST['GM'];}
	if (isset($_POST['MK'])) {$i[11]=$_POST['MK'];}
	if (isset($_POST['Dal'])) {$i[12]=$_POST['Dal'];}
	if (isset($_POST['Barbecue'])) {$i[13]=$_POST['Barbecue'];}
	if (isset($_POST['Grill'])) {$i[14]=$_POST['Grill'];}
	if (isset($_POST['Tandoori'])) {$i[15]=$_POST['Tandoori'];}
	if (isset($_POST['CLP'])) {$i[16]=$_POST['CLP'];}
	if (isset($_POST['Coke'])) {$i[17]=$_POST['Coke'];}
	if (isset($_POST['Slice'])) {$i[18]=$_POST['Slice'];}
	if (isset($_POST['Dew'])) {$i[19]=$_POST['Dew'];}
	if (isset($_POST['Fanta'])) {$i[20]=$_POST['Fanta'];}
	if (isset($_POST['Tomato'])) {$i[21]=$_POST['Tomato'];}
	if (isset($_POST['Corn'])) {$i[22]=$_POST['Corn'];}
	if (isset($_POST['HotnSour'])) {$i[23]=$_POST['HotnSour'];}
	if (isset($_POST['Chicken'])) {$i[24]=$_POST['Chicken'];}
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
				<li><a href="#"><?php echo $rown['FirstName'];?></a></li><br />
				<li><a href="logout.php">Logout</a></li>
			</ul>
			
            
		</div>
	</div>
	<div id="cont">
		<div class="box large left" style="color:white;">
		<h2><b>Meenakshi Canteen</b></h2>
		</div>
		
		<?php
		$total=0;
		$queryi='insert into order1 (RollNo) values ('.$rno.')';
		mysql_query($queryi) or die(mysql_error());
		$ono = mysql_query('select OrderNO from order1 where RollNo = "'.$rno.'"') or die(mysql_error());
		for($j=1;$j<=24;$j++)
		{
			if(isset($i[$j]))
			{
				$query = 'select * from menu1 where Code = "'.$i[$j].'"';
				$res = mysql_query($query);
				$row = mysql_fetch_array($res);
				$subtotal = $row['Price'] * $q[$i[$j]];
				$total += $subtotal;		
				echo $row['Name'] . "  :  ";
				echo $subtotal;
				echo $q[$i[$j]];
				$index=$i[$j];
				$queryinsert = 'update order1 set "'.$index.'" = "'.$q[$i[$j]].'" where OrderNO = "'.$ono.'"';
				mysql_query($queryinsert) or die(mysql_error());
			}
		}
		echo $total;
		
		?>
		
	</div>	
	<div id="bg"><div><table cellpadding="0" cellspacing="0"><tr><td><img alt="" src="home_includes/dept road.jpg" /></td></tr></table></div></div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct="UA-2741865-7";urchinTracker();</script>
</body>
</html>