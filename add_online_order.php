<?php
include 'config.php';
if(isset($_POST['submit']))
{
$checked_array=$_POST['prodid'];
foreach ($_POST['prodname'] as $key => $value) 
{
	if(in_array($_POST['prodname'][$key], $checked_array))
	{
	$prodname=$_POST['prodname'][$key];
    $food_id = $_POST['food_id'][$key];
	$prod_price= $_POST['prod_price'][$key];
	$prod_qty= $_POST['prod_qty'][$key];
    $userID= $_POST['userID'][$key];
    $check_id= $_POST['check_id'][$key];
    

    echo "User: " . $userID . "  Check: " . $check_id . "  Food: " . $prodname . "  Quantity: ".  $prod_qty . "<br>\n";
    #echo $table_id. " numaralı masaya: ". $prodname . " " . $prod_qty . " adet" . "<br>\n";
	$insertqry="INSERT INTO match_with(food_id, check_id, quantity) VALUES ('$food_id','$check_id','$prod_qty')";
	$insertqry=mysqli_multi_query($db,$insertqry);
	}
	
	
}
}
#header('Location: index.php');
?>

<html> <a href="online_customers.php">Return to the list of online customers.</a> </html>