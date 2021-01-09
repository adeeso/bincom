<?php 
$polling_unit=[];
$lga_id=$_GET['lga_id'];

$dbcon = new mysqli('localhost', 'root', '', 'bincom');

$query="SELECT * FROM polling_unit WHERE lga_id ='$lga_id'";

    $qr=$dbcon->query($query);

    if($qr->num_rows > 0){
        while($row=$qr->fetch_assoc()){
            $polling_unit[]=$row;
        }
    }
echo json_encode($polling_unit);
?>