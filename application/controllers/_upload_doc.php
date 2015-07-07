<?php
session_start();
require "../../config/conn.php";
require "../models/execute.php";
require "../models/admin.php";
if(isset($_POST['app_title']) && isset($_POST['app_desc']) && isset($_POST['submit']))
{
	$name=$_POST['app_title'];
	$desc=$_POST['app_desc'];
	$image_target_path = "../../upload/image/";
	$doc_target_path = "../../upload/documents/";
	
	$image_target_path = $image_target_path . basename( $_FILES['uploadimage']['name']); 
	$doc_target_path = $doc_target_path . basename( $_FILES['uploaddoc']['name']); 

	if(move_uploaded_file($_FILES['uploadimage']['tmp_name'], $image_target_path) || move_uploaded_file($_FILES['uploaddoc']['tmp_name'], $doc_target_path)) {
    $doc=basename( $_FILES['uploaddoc']['name']);
    $image=basename( $_FILES['uploadimage']['name']);
	$ret2=Admin::insertApp($name,$desc,$doc,$image,$_SESSION['uname']);
	header("location:../../admin/adminhome.php?upload=true");
} else{
	header("location:../../admin/adminhome.php?upload=false");
}
}
else
{
header("location:../../admin/adminhome.php?upload=impossible");
}
?>