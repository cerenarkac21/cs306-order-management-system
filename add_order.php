<?php
include 'config.php';
if(isset($_POST['submit']))
{
$checked_array=$_POST['prodid'];


$check_query = "SELECT MAX(check_id) as last_check_id FROM check_entity";
			
$myresult = mysqli_query($db, $check_query);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$check_id = $id_rows['last_check_id'];
	
}


foreach ($_POST['prodname'] as $key => $value) 
{
	if(in_array($_POST['prodname'][$key], $checked_array))
	{
	$prodname=$_POST['prodname'][$key];
    $food_id = $_POST['food_id'][$key];
	$prod_price= $_POST['prod_price'][$key];
	$prod_qty= $_POST['prod_qty'][$key];
    $table_id= $_POST['table_id'][$key];
    

    echo "Table: " . $table_id . "  Check: " . $check_id . "  Food: " . $prodname . "  Quantity: ".  $prod_qty . "<br>\n";
    #echo $table_id. " numaralı masaya: ". $prodname . " " . $prod_qty . " adet" . "<br>\n";
	$insertqry="INSERT INTO orders(food_id, check_id, quantity) VALUES ('$food_id','$check_id','$prod_qty')";
	$insertqry=mysqli_multi_query($db,$insertqry);
	}
	
	
}
}
#header('Location: index.php');
?>

<a href="javascript:history.go(-2)">Return to the panel</a>