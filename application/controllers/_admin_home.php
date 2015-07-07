<?php
if(isset($_POST['uname']) && $_POST['uname']!="" && isset($_POST['pwd']) && $_POST['pwd']!="")
{
	$msg_1=null;
	$load_result_a[]=null;
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];
	$ret_1 =Admin::login($uname,$pwd);
	echo $uname;
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
				$load_result_a[1]=$rows_1[0];	//user name
				echo "1";
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