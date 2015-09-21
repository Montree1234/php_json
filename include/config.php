<?php
$link=mysql_connect("localhost","root","root") or die("error".mysql_error());  
 	mysql_query("SET NAMES UTF8");
 	mysql_select_db("test_json",$link);  
?>