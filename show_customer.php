<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Sname</td>
			<td>Edit</td>
		</tr>
		<?php 
		$json = file_get_contents('http://localhost:8888/php_json/json_customer.php');

		$data = json_decode($json,true);
		foreach($data as $val3)
		{
			?>
			<tr>
				<td> <?php echo $val3["id"];  ?></td>
				<td><?php echo $val3["name"];  ?></td>
				<td><?php echo $val3["sname"];  ?></td>
				<td><a href="form_edit_customer.php?id=<?php echo $val3["id"]; ?>">edit</a></td>
			</tr>

			<?php
		}
		?>
	</table>
</body>
</html>
