<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="edit_customer.php" method="get">
		<?php
		$id = $_REQUEST['id'];
		include "include/config.php";
		$sql2 = "select * from customer where id = '$id'";
		$objQuery = mysql_query($sql2) or die (mysql_error());

		while ($row = mysql_fetch_assoc($objQuery)){

			?>

			<input type="hidden" name="id" value="<?php echo $row['id']; ?>" >

			<input type="text" name="name" value="<?php echo $row['name']; ?>">

			<input type="text" name="sname" value="<?php echo $row['sname']; ?>">

			<input type="submit" value="Submit">
			<a href="showdata.php">BACK</a>
			<?php
		}			
		?>	
	</form>
</body>
</html>