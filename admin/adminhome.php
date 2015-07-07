<!DOCTYPE html>
<?php
session_start();
require "../config/conn.php";
if(!(isset($_SESSION['uname']) && isset($_SESSION['pwd'])))
{
	header("location:./");
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
<table style="width: 913px">
	<tr style="width: 600px">
		<td class="style1">Welcome <?php echo $_SESSION['uname'];?>!</td>
		<td class="style1" style="float:right;"><a href="logout.php" class="al">Logout</a>	</td>
	</tr>
</table>
</div>

<div id="div_container" align="center">
<form method="post" action="../application/controllers/_upload_doc.php" enctype="multipart/form-data">
<table style="width: 913px">
	<tr>
		<td style="width: 600px" align="center"><input name="app_title" style="width:390px;" class="searchText" id="app_title" type="text" placeholder=" Title of the Application*" autofocus maxlength="99"/></td>
	</tr>
	<tr>
		<td style="width: 600px" align="center"><textarea class="searchText" name="app_desc" style="height:180px;width:600px;" placeholder=" Description*" maxlength="9999"></textarea></td>
	</tr>
	<tr>
		<td style="width: 600px" class="style2"><center>Select Image: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="uploadimage" class="searchText" ></center></td>
	</tr>
	<tr>
		<td style="width: 600px" class="style2"><center>Select Document: <input type="file" name="uploaddoc" class="searchText" ></center></td>
	</tr>
	<tr>
		<td style="width: 600px" align="center"><?php if(isset($_GET['upload'])) { if($_GET['upload']=='false') echo "<span class='style2 error'>There was an error uploading the Application details, please try again!!</span>"; if($_GET['upload']=='impossible') echo "<span class='style2 error'>Application name and description is mandatory!</span>"; if($_GET['upload']=='true') echo "<span class='style2 success'>Application uploaded successfully!!</span>"; } ?><br><input class="buttonStyle" name="submit" type="submit" value="Upload"/></td>
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