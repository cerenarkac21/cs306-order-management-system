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

<tr> <th> ID </th> <th> NAME </th> <th>TEL</th> <th>PASSWORD</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM courier";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $courier_id = $row['courier_id'];
  $courier_name_surname = $row['courier_name_surname'];
  $courier_tel_no = $row['courier_tel_no'];
  $pssword = $row['pssword'];


	echo "<tr>" . "<th>" . $courier_id . "</th>" . "<th>" . $courier_name_surname . "</th>" . "<th>" . $courier_tel_no . "</th>" . "<th>" . $pssword . "</th>" . "<th>" ;
}

?>

</table>
</div>

</body>
</html>