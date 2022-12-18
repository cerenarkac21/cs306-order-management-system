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

    <tr> <th>CATEGORY</th> </tr> 

<?php

include "config.php";
include "waiterNavbar.php";
$sql_statement = "SELECT fcategory FROM `foods` GROUP BY fcategory";
$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
	$fcategory = $row['fcategory'];

  echo "<tr>" . "<th>" . $fcategory. "</th>" . "</tr>" ;
}

?>

</table>
</div>

</body>
</html>