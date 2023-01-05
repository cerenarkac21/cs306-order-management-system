<head>
    <link rel="stylesheet" href="style.css">
    </head>



<?php 

include "config.php";
include "courierNavbar.php";

$courier_id = $_GET['id'];

?>
  <body>
    <div class="waiterNavbar">
        <a href="deleteOnlineOrder_courier.php?id=<?php echo $courier_id ?>">CURRENT ORDERS</a>
        <a href="prev_order_courier.php?id=<?php echo $courier_id ?>">PREVIOUS ORDERS</a>
        <a href="client_chat.php">SUPPORT PAGE</a>
    </div>
    </body>

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
WHERE match_with.courier_id = $courier_id AND receives_online.completed = 1
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

<h4>Showing past orders for: 
<?php
$sql_statement2 = "SELECT courier_name_surname FROM courier WHERE courier_id = $courier_id;";


$result = mysqli_query($db, $sql_statement2);

while($row2 = mysqli_fetch_assoc($result))
{
  $courier_name_surname = $row2['courier_name_surname'];



	echo $courier_name_surname;
}
?>
</h4>

</body>
</html>

