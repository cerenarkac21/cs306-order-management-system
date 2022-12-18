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

<tr> <th> ID </th> <th> NAME </th> <th>CATEGORY</th> <th>PREP TIME</th> <th>PRICE</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM foods";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $fid = $row['fid'];
  $fname = $row['fname'];
	$fcategory = $row['fcategory'];
  $fprep = $row['fprep'];
  $fprice = $row['fprice'];

	echo "<tr>" . "<th>" . $fid . "</th>" . "<th>" . $fname . "</th>" . "<th>" . $fcategory . "</th>" . "<th>" . $fprep . "</th>" . "<th>" . $fprice . "</th>" . "</tr>" ;
}

?>

</table>
</div>

</body>
</html>