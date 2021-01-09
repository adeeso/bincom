<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Question 3</title>
</head>
<body>
	
<?php 
include('bincom.php');
?>

<table border="1">
				<thead>
			<tr>
				<th>s/n</th>
				<th>polling_unit_uniqueid</th>
				<th>party_abbreviation</th>
				<th>party_score</th>

			</tr>
		</thead>

		<tbody>
<?php

$init= new Announced_pu_results("localhost", "root", "", "bincom");
	$party= $init->getallParty();
	if(count($party)>1){
		$kounter=1;
	foreach($party as $key => $value){
?>

<tr>
	<td><?php echo $kounter++;  ?></td>
	<td><?php echo $value['polling_unit_uniqueid']; ?></td>
	<td><?php echo $value['party_abbreviation']; ?></td>
	<td><?php echo $value['party_score']; ?></td>

</tr>
	
	
	<?php
       }
   }
   ?>
		</tbody>

			</table>

</body>
</html>