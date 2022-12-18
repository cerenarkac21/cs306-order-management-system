<! ––
<head>
    <link rel="stylesheet" href="style.css">
    </head>


<?php 

include "config.php";

include "list_tables.php";

?>
<h4>Please choose which food to delete:</h4>

<form action="create_check.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT table_id, occupancy FROM table_entity";

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
