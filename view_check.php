<!DOCTYPE html>
<html>
<head>
	<title>Food List</title>
  <link rel="stylesheet" href="style.css">






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

<tr> <th>FOOD NAME</th> <th>FOOD CATEGORY</th> <th>PRICE</th> <th>ORDER TIME</th> </tr> 

<?php

include "config.php";

if (isset($_POST['ids'])){

  $selection_id = $_POST['ids'];
  echo "<h2><b>"."Showing all: ".$selection_id."</b></h2>";
  $sql_statement = "SELECT * FROM foods WHERE fcategory = '$selection_id'";
  
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

}

?>

</table>

<h4>Please choose a food:</h4>

<form action="create_check.php" method="POST">
<select name="ids">

<?php

$myresult = mysqli_query($db, $sql_statement);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$fid = $id_rows['fid'];
	$fname = $id_rows['fname'];
	echo "<option value=$fid>". "#" . $fid. " " . $fname . "</option>";
}



?>
</select>

<button>ADD</button>
</form>

</div>

</body>
</html>


