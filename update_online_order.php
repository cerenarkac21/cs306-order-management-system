<html> 
<head>
	<title>Update Order</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>

</head>
<body>

<div align="center">

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
  $check_id= $_POST['check_id'][$key];
  #echo $check_id;

  #echo "  Check: " . $check_id . "  Food: " . $prodname . "  Quantity: ".  $prod_qty . "<br>\n";
    #echo $table_id. " numaralı masaya: ". $prodname . " " . $prod_qty . " adet" . "<br>\n";
	$insertqry="INSERT INTO orders (food_id, check_id, quantity) VALUES ('$food_id','$check_id','$prod_qty')";
	$insertqry=mysqli_multi_query($db,$insertqry);
	}
	
	
}
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>

	