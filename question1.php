<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Question 1</title>
</head>
<body>
	
<?php 
include('bincom.php');
?>

<table border="1">
				<thead>
			<tr>
				<th>s/n</th>
				<th>uniqueid</th>
				<th>polling_unit_id</th>
				<th>ward_id</th>
				<th>lga_id</th>
				<th>uniquewardid</th>
				<th>polling_unit_number</th>
				<th>polling_unit_name</th>
				<th>polling_unit_description</th>
				<th>lat</th>
				<th>long</th>

			</tr>
		</thead>

		<tbody>
<?php

$init= new Pollingunit("localhost", "root", "", "bincom");
	$pollingunit= $init->getpollingUnit();
	if(count($pollingunit)>1){
		$kounter=1;
	foreach($pollingunit as $key => $value){
?>

<tr>
	<td><?php echo $kounter++;  ?></td>
	<td><?php echo $value['uniqueid']; ?></td>
	<td><?php echo $value['polling_unit_id']; ?></td>
	<td><?php echo $value['ward_id']; ?></td>
	<td><?php echo $value['lga_id']; ?></td>
	<td><?php echo $value['uniquewardid']; ?></td>
	<td><?php echo $value['polling_unit_number']; ?></td>
	<td><?php echo $value['polling_unit_name']; ?></td>
	<td><?php echo $value['polling_unit_description']; ?></td>
	<td><?php echo $value['lat']; ?></td>
	<td><?php echo $value['long']; ?></td>
</tr>
	
	
	<?php
       }
   }
   ?>
		</tbody>

			</table>

</body>
</html>