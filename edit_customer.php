<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	include "include/config.php";
	echo $id = $_GET['id'];
	echo $name = $_GET['name'];
	echo $sname = $_GET['sname'];
	

echo $sql_5 = "UPDATE customer SET name='$name', sname='$sname' WHERE id='$id'";
	$result_5 = mysql_query($sql_5) or die(mysql_error());
	if($result_5){
		echo "<script type='text/javascript'>alert('ลงทะเบียนได้');window.location.href = \"show_customer.php\";</script>";

	} else {

		echo "<script>alert('ลงทะเบียนไม่ได้');window.history.back();</script>";

	}

	?>
</body>
</html>