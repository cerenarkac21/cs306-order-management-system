<html> 
<head>
	<title>Tables List</title>

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
    $userID= $_POST['userID'][$key];
    $check_id= $_POST['check_id'][$key];
    

    echo "User: " . $userID . "  Check: " . $check_id . "  Food: " . $prodname . "  Quantity: ".  $prod_qty . "<br>\n";
    #echo $table_id. " numaralı masaya: ". $prodname . " " . $prod_qty . " adet" . "<br>\n";
	$insertqry="INSERT INTO orders (food_id, check_id, quantity) VALUES ('$food_id','$check_id','$prod_qty')";
	$insertqry=mysqli_multi_query($db,$insertqry);
	}
	
	
}
}
#header('Location: index.php');
?>

<html> <a href="online_customers.php">Return to the list of online customers.</a> </html>
	
<form method="post">
  <table>
    <tr>
      <th>Courier ID</th>
      <th>Name</th>
      <th>Telephone</th>
      <th>Select</th>
    </tr>
    <?php 
    $sql_statement = "SELECT * FROM courier";
    $result = mysqli_query($db, $sql_statement);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($rows as $row): ?>
    <tr>
      <td><?php echo $row['courier_id']; ?></td>
      <td><?php echo $row['courier_name_surname']; ?></td>
      <td><?php echo $row['courier_tel_no']; ?></td>
      <td>
        <input type="radio" name="selected" value="<?php echo $row['courier_id']; ?>">
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
  <input type="submit" value="Submit">
</form>

<?php 
if (isset($_POST['selected'])) {
  $courier_id = $_POST['selected'];
  $insertqry="INSERT INTO match_with (courier_id, check_id)
  SELECT cou.courier_id, ord.check_id
  FROM courier cou
  JOIN orders ord ON ord.check_id = (SELECT MAX(check_id) FROM check_entity)
  WHERE cou.courier_id = $courier_id";
	$insertqry=mysqli_multi_query($db,$insertqry);
        
  
}
?>
</div>



</body>
	<a href="online_customers.php">Return to the list of online customers.</a> 
	
</html>
