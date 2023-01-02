<table>

    <tr> <th> ID </th> <th> NAME </th> <th>CATEGORY</th> <th>PRICE</th> <th>QUANTITY</th> <th>TOTAL PRICE</th> </tr> 
<?php 

include "config.php";

if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];
#echo $selection_id;




$total = 0;
$sql_statement1 = "SELECT f.*, o.quantity, (f.fprice * o.quantity) as total_price
FROM foods f
INNER JOIN orders o ON f.fid = o.food_id 
INNER JOIN receives_online r ON o.check_id = r.check_id 
WHERE r.check_id = $selection_id
";
$result = mysqli_query($db, $sql_statement1);
while($row = mysqli_fetch_assoc($result)) {
  $fid = $row['fid'];
  $fname = $row['fname'];
  $fcategory = $row['fcategory'];
  $fqty = $row['quantity'];
  $fprice = $row['fprice'];
  $total_price = $row['total_price'];

  $total += $total_price;

  echo "<tr>" . "<th>" . $fid . "</th>" . "<th>" . $fname . "</th>" . "<th>" . $fcategory . "</th>" . "<th>" . $fprice . "</th>" . "<th>" . $fqty . "</th>". "<th>" . $total_price . "</th>" . "</tr>" ;
}
echo "Total cost is $total. Payment is done. Here is the details:";



$query1 = "UPDATE receives_online
SET completed = 1
WHERE check_id = $selection_id";

$stmt = $db->prepare($query1);
$stmt->execute();

#header('Location: ' . $_SERVER['HTTP_REFERER']);

}

else
{

	echo "The form is not set.";

}

?>
<a href="javascript:history.go(-1)">Return</a>

</table>