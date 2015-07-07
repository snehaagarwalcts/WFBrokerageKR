<?php
class Search
{
	public function searchApp($searchkey)
	{
		$sql="SELECT app_name,doc_path FROM app_details WHERE app_name like '%$searchkey%' order by app_name";		
		return DBAccess::execute_my_query($sql);
	}
	
	public function getAppDetails($appName)
	{
		$sql="SELECT app_name,app_description,doc_path,image_path FROM app_details WHERE app_name='$appName'";
		return DBAccess::execute_my_query($sql);
	}
}
?>
