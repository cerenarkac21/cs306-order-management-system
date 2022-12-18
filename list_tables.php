<!DOCTYPE html>
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
</style>

</head>
<body>

<div align="center">

	<table>

<tr> <th> ID </th> <th> OCCUPANCY </th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM table_entity";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $table_id = $row['table_id'];
  $occupancy = $row['occupancy'];

	echo "<tr>" . "<th>" . $table_id . "</th>" . "<th>" . $occupancy . "</th>" . "</tr>" ;
    
}

?>

</table>
</div>

</body>
</html>