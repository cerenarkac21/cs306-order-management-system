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
	$prod_price= $_POST['prod_price'][$key];
	$prod_qty= $_POST['prod_qty'][$key];
    $table_id= $_POST['table_id'][$key];
    

    echo $table_id. " numaralı masaya: ". $prodname . " " . $prod_qty . " adet" . "<br>\n";
	#$insertqry="INSERT INTO `product`( `product_name`, `product_price`, `product_quantity`) VALUES ('$prodname','$prod_price','$prod_qty')";
	#$insertqry=mysqli_query($con,$insertqry);
	}
	
	
}
}
#header('Location: index.php');
?>

<html> <a href="tables.php">Masa menüsüne dönmek için tıklayınız.</a> </html>