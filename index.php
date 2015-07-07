<!DOCTYPE html>
<?php
require "config/conn.php";
?>
<html>
<head>
<title><?php echo Connection_Details::$appname ;?></title>
<link rel="icon" type="image/ico" href="app_kit/img/favicon.jpg" />
<link type="text/css" href="app_kit/css/front.css" rel="stylesheet" />
<script type="text/javascript" src="app_kit/scripts/allinone.js"></script>
</head>
<body  bgcolor="black">
<div id="div_header" align="center">
<table style="width: 913px">
	<tr>
		<td style="width: 600px" class="style3"><center><?php echo Connection_Details::$appname ;?></center></td>
	</tr>
</table>
</div>

<div id="div_search" align="center">
<table style="width: 913px">
	<tr>
		<td style="width: 600px" align="center"><input type="text" class="searchText" id="search_text" name="search_text" placeholder=" Enter name of the Application to search" style="width: 550px;" autofocus onkeyup="search_app(search_text.value)"></td>
	</tr>
</table>
</div>

<div id="div_container" align="center">

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