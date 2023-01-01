<!DOCTYPE html>
<html>
<head>
	<title>Waiter Panel</title>

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

<tr> <th> COURIER_ID </th> <th> CHECK_ID </th> <th>


<?php

include "config.php";

$sql_statement = "SELECT * FROM match_with";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $courier_id = $row['courier_id'];
  $check_id = $row['check_id'];


	echo "<tr>" . "<th>" . $courier_id . "</th>" . "<th>" . $check_id . "</th>" . "<th>";
}

?>

</table>
</div>

</body>
</html>