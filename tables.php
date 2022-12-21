<head>
    <link rel="stylesheet" href="style.css">
    </head>


<?php 

include "config.php";

include "table_view.php";

?>

<br><br>
<br><br>

<h3>
	Take Table
</h3>
<h4>Please choose which table to take:</h4>

<form action="create_table.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT table_id from table_entity WHERE occupancy = 0";

$myresult = mysqli_query($db, $sql_command);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$table_id = $id_rows['table_id'];
	$occupancy = $id_rows['occupancy'];
	echo "<option value=$table_id>". "#" . $table_id. " " . $occupancy. "</option>";
  
  
}

?>
</select>

<button>SELECT</button>
</form>






<h3>
	Empty Table
</h3>
<h4>Please choose a table to empty:</h4>

<form action="empty_table.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT table_id from table_entity WHERE occupancy = 1";

$myresult = mysqli_query($db, $sql_command);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$table_id = $id_rows['table_id'];
	$occupancy = $id_rows['occupancy'];
	echo "<option value=$table_id>". "#" . $table_id. " " . $occupancy. "</option>";
  
  
}

?>
</select>


<button>SELECT</button>
</form>


