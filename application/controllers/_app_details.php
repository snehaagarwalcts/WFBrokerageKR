<?php
if(isset($_GET['appName']) && $_GET['appName']!="")
{
	$appName=$_GET['appName'];
	$msg_1=null;
	$load_result_a[][]=null;
	$i=1;
	$ret_1 =Search::getAppDetails($appName);
	$res_type = is_resource($ret_1) ? get_resource_type($ret_1) : gettype($ret_1);
	if(strpos($res_type, 'mysql') === false) 
	{
		$msg_1= 'Invalid resource type: ' . $res_type;
	}
	else
	{	
		$total_row_1 =mysql_num_rows($ret_1);
		if($total_row_1 >0)
		{
			while($rows_1=mysql_fetch_row($ret_1))
			{
				$load_result_a[$i][1]=$rows_1[0];	//app name
				$load_result_a[$i][2]=$rows_1[1];	//app description
				$load_result_a[$i][3]=$rows_1[2];	//doc path
				$load_result_a[$i][4]=$rows_1[3];	//image path
				$i++;
			}
		}
		else
		{
			$msg_1 = "No record Found!";
		}
		mysql_free_result($ret_1);		
	}
}
?>