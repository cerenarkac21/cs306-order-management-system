<?php
include 'config.php';
if(isset($_POST['submit']))
{

$checked_array=$_POST['prodid'];
foreach ($_POST['prodname'] as $key => $value) 
{
	if(in_array($_POST['prodname'][$key], $checked_array))
	{

	$check_id= $_POST['check_id'][$key];
    $fid= $_POST['food_id'][$key];
	$updated_quantity= $_POST['prod_updated_qty'][$key];
	
	

	$query1 = "UPDATE orders SET quantity = $updated_quantity WHERE check_id = $check_id AND food_id = $fid";
	$query2 = "DELETE FROM orders WHERE check_id = $check_id AND food_id = $fid AND quantity = 0";

	$stmt = $db->prepare($query1);
	$stmt->execute();

	$stmt = $db->prepare($query2);
	$stmt->execute();
	}
	
	
}
}

#header("location:javascript://history.go(-1)");
?>

<html> <h4>Operation is successful. </h4>
<button onclick="history.back()">Go Back</button> </html>