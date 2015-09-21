<?php
//header('content-type:text/html;charset=utf-8');
//header("content-type:text/javascript;charset=utf-8");  

$json = 'http://localhost:8888/test_json/webservice.php';
echo $obj = json_decode($json,true);
foreach($obj as $val)
{
	echo $val->{'id'}."<br>"; 
	echo $val->{'name'}."<br>";
	echo $val->{'sname'}."<br>";

}


?>
===

<?php 
$json_string = 'http://localhost:8888/test_json/webservice.php';
$jsondata = file_get_contents($json_string);
$obj2 = json_decode($jsondata,true);


foreach($obj2 as $val2)
{
	//echo $val2->{'id'}."<br>"; 
    echo $val2["id"]; 

}

?>

=====

	
   


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
 		</tr>
 		<?php 
$json = file_get_contents('http://localhost:8888/test_json/webservice.php');

$data = json_decode($json,true);
foreach($data as $val3)
{
	?>
 		<tr>
 			<td> <?php echo $val3["id"];  ?></td>
 			<td><?php echo $val3["name"];  ?></td>
 			<td><?php echo $val3["sname"];  ?></td>
 		</tr>

<?php
}
 ?>
 	</table>
 </body>
 </html>
