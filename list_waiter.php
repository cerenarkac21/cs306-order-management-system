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

$sql_statement = "SELECT * FROM waiter";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $waiter_id = $row['waiter_id'];
  $waiter_name_surname = $row['waiter_name_surname'];
  $waiter_tel_no = $row['waiter_tel_no'];
  $pssword = $row['pssword'];


	echo "<tr>" . "<th>" . $waiter_id . "</th>" . "<th>" . $waiter_name_surname . "</th>" . "<th>" . $waiter_tel_no . "</th>" . "<th>" . $pssword . "</th>" . "<th>" ;
}

?>

</table>
</div>

</body>
</html>