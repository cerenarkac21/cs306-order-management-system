<!DOCTYPE html>
<html>
<head>
	<title>Food List</title>

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

<<<<<<< Updated upstream
<tr> <th> ID </th> <th> NAME </th> <th>TEL</th> <th>PASSWORD</th> </tr> 
=======
<tr> <th> ID </th> <th> NAME </th> <th>CATEGORY</th> <th>PREP TIME</th> <th>PRICE</th> </tr> 
>>>>>>> Stashed changes

<?php

include "config.php";

$sql_statement = "SELECT * FROM cashier";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $cashier_id = $row['cashier_id'];
  $cashier_name_surname = $row['cashier_name_surname'];
  $pssword = $row['pssword'];
  $cashier_tel_no = $row['cashier_tel_no'];


	echo "<tr>" . "<th>" . $cashier_id . "</th>" . "<th>" . $cashier_name_surname . "</th>" . "<th>" . $pssword . "</th>" . "<th>" . $cashier_tel_no . "</th>" . "<th>" ;
}

?>

</table>
</div>

</body>
</html>