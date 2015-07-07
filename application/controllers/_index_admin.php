<?php
$index_msg="<br>";
if(isset($_POST['submit']) && isset($_POST['Text_user_name']) && isset($_POST['Password_user']))
{
	$uname=$_POST['Text_user_name'];
	$pwd=$_POST['Password_user'];
	$ret_1 =Admin::login($uname,$pwd);
	$res_type = is_resource($ret_1) ? get_resource_type($ret_1) : gettype($ret_1);
	if(strpos($res_type, 'mysql') === false) 
	{
		$index_msg = "Incorrect user name or password. Please try again!!";
	}
	else
	{	
		$total_row_1 =mysql_num_rows($ret_1);
		if($total_row_1 >0)
		{
			while($rows_1=mysql_fetch_row($ret_1))
			{
				echo 
				$_SESSION['uname']=$uname;
				$_SESSION['pwd'] = $pwd;
				header("location:adminhome.php");
			}
		}
		else
		{
			$index_msg = "Incorrect user name or password. Please try again!!";
		}
		mysql_free_result($ret_1);		
	}
}
?>