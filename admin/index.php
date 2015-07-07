<!DOCTYPE html>
<?php
session_start();
require "../config/conn.php";
require "../application/models/execute.php";
require "../application/models/admin.php";
require "../application/controllers/_index_admin.php";
if(isset($_SESSION['uname']) && isset($_SESSION['pwd']))
{
	header("location:adminhome.php");
}
?>
<html>
<head>
<title><?php echo Connection_Details::$appname ;?> - Admin	</title>
<link rel="icon" type="image/ico" href="../app_kit/img/favicon.jpg" />
<link type="text/css" href="../app_kit/css/front.css" rel="stylesheet" />
<script type="text/javascript" src="../app_kit/scripts/allinone.js"></script>
</head>
<body  bgcolor="black">
<div id="div_header" align="center">
<table style="width: 913px">
	<tr>
		<td style="width: 600px" class="style3"><center><?php echo Connection_Details::$appname ;?> Admin</center></td>
	</tr>
</table>
</div>

<div id="div_container" align="center">
<br><br><br>
<form method="post" action="">
<table style="width: 913px">
	<tr>
		<td style="width: 600px" align="center"><input name="Text_user_name" class="searchText" id="Text_user_name" type="text" placeholder=" User Name" autofocus/></td>
	</tr>
	<tr>
		<td style="width: 600px" align="center"><input class="searchText" name="Password_user" id="Password_user" type="password" placeholder=" Password" autofocus/></td>
	</tr>
	<tr>
		<td style="width: 600px" align="center"><input class="buttonStyle" name="submit" type="submit" value="Login"/></td>
	</tr>
	<tr>
		<td style="width: 600px" align="center" class="style2"><center><span class="error"><?php echo $index_msg;?></span></center></td>
	</tr>
</table>
<br><br><br><br>
<table style="width: 913px">
	<tr>
		<td style="width: 600px" class="style2"><center>Go back to <a href="../" class="al"><?php echo Connection_Details::$appname ;?> home page.</a></center></td>
	</tr>
</table>
</form>
</div>	

<div id="div_footer" align="center">
<table style="width: 913px">
	<tr>
		<td style="width: 600px" class="style1"><center><?php echo Connection_Details::$companyname ;?> © 2015. Design by <a href="mailto:sneha.agarwal@cognizant.com" class="al">SNEHA AGARWAL<a></center></td>
	</tr>
</table>
</div>																																																																						<!--Arnab Sil-->
</body>
</html>