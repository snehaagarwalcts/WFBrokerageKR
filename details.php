<!DOCTYPE html>
<?php
require "config/conn.php";
require "application/models/execute.php";
require "application/models/search.php";
require "application/controllers/_app_details.php";

if(isset($_GET['appName']) && $_GET['appName']!="")
{
	$appName=$_GET['appName'];
?>
<html>
<head>
<title><?php echo Connection_Details::$appname."-".$appName;?></title>
<link rel="icon" type="image/ico" href="app_kit/img/favicon.jpg" />
<link type="text/css" href="app_kit/css/front.css" rel="stylesheet" />
<script type="text/javascript" src="app_kit/scripts/allinone.js"></script>
</head>
<body  bgcolor="black">

<div id="div_appheader" align="center">
<table style="width: 913px">
	<tr>
		<td style="width: 600px" class="style4"><center><?php echo $load_result_a[1][1]; ?></center></td>
	</tr>
</table>
</div>

<?php
if($load_result_a[1][4]!="")
{
?>
<div id="div_appcontainer" align="center">
	<table style="width: 913px" class="style2">
		<tr>
			<td style="width: 600px" align="center"><?php echo "<img src='upload/image/".$load_result_a[1][4]."' height='350px'>"; ?></td>
		</tr>
	</table>
</div>
<?php
}
?>

<div id="div_appcontainer" align="center">
	<table style="width: 913px" class="style2">
		<tr>
			<td style="width: 600px" align="center"><p align="justify"><?php echo $load_result_a[1][2]; ?></td>
		</tr>
	</table>
</div>

<?php
if($load_result_a[1][3]!="")
{
?>
<div id="div_appcontainer" align="center">
	<table style="width: 913px" class="style2">
		<tr>
			<td style="width: 600px" align="center"><a class="al" target="_blank" href='<?php echo "upload/documents/".$load_result_a[1][3];?>'>Click here</a> for more information.</td>
		</tr>
	</table>
</div>
<?php
}
?>

<div id="div_footer" align="center">
<table style="width: 913px">
	<tr>
		<td style="width: 600px" class="style1"><center><?php echo Connection_Details::$companyname ;?> © 2015. Design by <a href="mailto:sneha.agarwal@cognizant.com" class="al">SNEHA AGARWAL<a></center></td>
	</tr>
</table>
</div>																																																																						<!--Arnab Sil-->
</body>
</html>
<?php
}
else
	header("location:./");	//if anybody tries to directly access the link, will be redirected to search page(index.php)
?>
