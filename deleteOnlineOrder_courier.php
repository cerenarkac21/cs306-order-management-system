<head>
    <link rel="stylesheet" href="style.css">
    </head>



<?php 

include "config.php";
include "courierNavbar.php";
$courier_id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Orders</title>

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
</style>

</head>
<body>

<div align="center">

	<table>

<tr> <th> CHECK ID </th> <th> ORDER TIME </th> <th> CUSTOMER NAME </th> <th> ADDRESS </th> <th> CONTACT NUMBER </th> </tr>


<?php

include "config.php";

$sql_statement = "SELECT online_customer.* , match_with.*
FROM online_customer
JOIN receives_online ON online_customer.userID = receives_online.userID
JOIN match_with ON receives_online.check_id = match_with.check_id
WHERE match_with.courier_id = $courier_id
ORDER BY match_with.order_time DESC;
";


$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $courier_id = $row['courier_id'];
  $check_id = $row['check_id'];
  $address = $row['address'];
  $username = $row['username'];
  $tel = $row['online_cust_tel_no'];
  $order_time = $row['order_time'];
  

	echo "<tr>" .  "<th>" . $check_id . "</th>" . "<th>" . $order_time . "</th>" . "<th>" . $username  . "</th>" . "<th>" . $address  . "</th>". "<th>" . $tel  . "</th>" . "<tr>";
}

?>

</table>
</div>

</body>
</html>
<h4>Please choose the check number to mark the order as arrived:</h4>

<form action="deletingFileForOnlineOrder.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT * FROM match_with WHERE courier_id = $courier_id";

$myresult = mysqli_query($db, $sql_command);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$courier_id = $id_rows['courier_id'];
	$check_id = $id_rows['check_id'];
	echo "<option value=$check_id>". "#" . $courier_id. " " . $check_id . "</option>";
}

?>
</select>

<button>DELETE</button>
</form>