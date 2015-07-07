<?php
class Admin
{
	public function login($uname, $pwd)
	{
		$pwd = md5($pwd);
		$sql="SELECT uname FROM tbl_user WHERE uname='$uname' and password='$pwd'";
		return DBAccess::execute_my_query($sql);
	}
	public function insertApp($name,$description,$docPath,$imagePath,$createdBy)
	{
		$sql="insert into app_details (app_name,app_description,doc_path,image_path,created_by) values('$name','$description','$docPath','$imagePath','$createdBy')";
		return DBAccess::execute_my_query($sql);
	}
}
?>
