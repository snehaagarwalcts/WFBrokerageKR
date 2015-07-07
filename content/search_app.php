<?php
require "../config/conn.php";
require "../application/models/execute.php";
require "../application/models/search.php";
require "../application/controllers/_search_app.php";
?>

<table style="width: 913px" class="style2">
	<?php
	for($x=1;$x<$i;$x++)
	{
		$app_name=$load_result_a[$x][1];
		echo '<tr><td style="width: 600px" align="center"><a class="al" href="details.php?appName='.$app_name.'" target="_blank">'.$app_name.'</td></tr>';
	}
	?>
</table>

