<?php
include 'config.php';
if(isset($_POST['submit']))
{

$checked_array=$_POST['prodid'];
foreach ($_POST['waiter_id'] as $key => $value) 
{
	if(in_array($_POST['prodid'][$key], $checked_array))
	{

	$waiter_id= $_POST['waiter_id'][$key];
	
	$updated_password= $_POST['updated_password'][$key];
	

	
	$updateqry="UPDATE waiter
	SET pssword = $updated_password
	WHERE waiter_id = $waiter_id;
	;";
	$update=mysqli_multi_query($db,$updateqry);
	}
	
	
}
}

#header("location:javascript://history.go(-1)");
?>

<html> <h4>Password has been changed successfully. </h4>
<button onclick="history.back()">Go Back</button> </html>