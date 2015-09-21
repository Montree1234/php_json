<?php
header('content-type:text/html;charset=utf-8');
header("content-type:text/javascript;charset=utf-8");  
include "include/config.php";
$sql2 = "select * from customer";
$objQuery = mysql_query($sql2) or die (mysql_error());

while ($row = mysql_fetch_assoc($objQuery)){
	$output[] = $row;
	
	//echo $row['filter_plant'];


}
//print(json_encode($output));


	//$data =iconv("tis-620","utf-8","\u0e42\u0e23\u0e07\u0e01\u0e23\u0e2d\u0e07\u0e19\u0e49\u0e33\u0e2a\u0e33\u0e19\u0e31\u0e01\u0e07\u0e32\u0e19\u0e1b\u0e23\u0e30\u0e1b\u0e32\u0e2e\u0e2d\u0e14");
echo $json= json_encode($output, JSON_UNESCAPED_UNICODE);


?>
