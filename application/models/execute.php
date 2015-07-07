<?php
//error_reporting(0); 

class DBAccess
{
	public function execute_my_query($sql)
	{
		$h= Connection_Details::$host;
		$n= Connection_Details::$name;
		$p= Connection_Details::$pass;
		
		$con = mysql_connect($h,$n,$p) or die('Could not connect: ' . mysql_error()." :- ".mysql_errno());
		$database = Connection_Details::$db_name or die ($execute_result = mysql_error());
		
		mysql_select_db($database, $con);

		mysql_query('SET character_set_results=utf8');
		mysql_query('SET names=utf8');  
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_connection=utf8');   
		mysql_query('SET character_set_results=utf8');   
		mysql_query('SET collation_connection=utf8_general_ci'); 		
		
		if (!($execute_result =mysql_query($sql,$con))) // if wrong query pass
		{
			$execute_result =mysql_error()." : Code - ".mysql_errno($con); //
		}
		if (mysql_errno() == 1203) 
		{
			$execute_result="Please wait! Server is bussy to responding!";
		}
		if (mysql_errno() == 1451) 
		{
			$execute_result="You can't Delete it!";
		}
		if (mysql_errno() == 1062) 
		{
			$execute_result="Duplicate Entry Strictly Prohibited!";
		}
		if (mysql_errno() == 1054) 
		{
			$execute_result=mysql_error();
		}
		
		

		mysql_close($con);	
		return $execute_result;
	}
	
	public function execute_inno_query($sql)
	{
		$h= Connection_Details::$host;
		$n= Connection_Details::$name;
		$p= Connection_Details::$pass;
		
		$con = mysql_connect($h,$n,$p) or die('Could not connect: ' . mysql_error()." :- ".mysql_errno());
		$database = Connection_Details::$db_name;
		
		mysql_select_db($database, $con);

		mysql_query('SET character_set_results=utf8');
		mysql_query('SET names=utf8');  
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_connection=utf8');   
		mysql_query('SET character_set_results=utf8');   
		mysql_query('SET collation_connection=utf8_general_ci'); 

		mysql_query('SET AUTOCOMMIT=0'); 
		mysql_query('START TRANSACTION'); 
		
		$loop=sizeof($sql);
		
		for($a=0;$a<$loop;$a++)
		{
			if (!($execute_result =mysql_query($sql[$a],$con))) // if wrong query pass
			{
				$execute_result =mysql_error()." : Code - ".mysql_errno($con); //
				mysql_query('ROLLBACK');
				break;
			}
		}		
		mysql_query('COMMIT');
		mysql_query('SET AUTOCOMMIT=1');
		
		mysql_close($con);	
		return $execute_result;
	}
	
	public function chk_parameter($parm)
	{
		$ret_val=1099;
		$h= Connection_Details::$host;
		$n= Connection_Details::$name;
		$p= Connection_Details::$pass;
		
		$con = mysql_connect($h,$n,$p) or die('Could not connect: ' . mysql_error());		
		
		$ret_val =mysql_real_escape_string(htmlspecialchars(trim($parm)));
		//$ret_val =mysql_real_escape_string($parm);
		
		mysql_close($con);
		return $ret_val;
	}
	
	public function execute_compile_query($sql)
	{
		$h= Connection_Details::$host;
		$n= Connection_Details::$name;
		$p= Connection_Details::$pass;		
		$database = Connection_Details::$db_name;
		
		$con = mysqli_connect($h,$n,$p,$database) or die('Could not connect: ' . mysqli_connect_error());

		$execute_result =mysqli_query($con,$sql);
		$return_result = mysqli_affected_rows($con);		
		
		mysqli_free_result($execute_result);
		return $return_result;
	
	}
}
?>