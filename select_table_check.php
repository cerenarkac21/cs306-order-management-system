<head>
    <link rel="stylesheet" href="style.css">
    </head>


<?php 

include "config.php";
include "waiterNavbar.php";
?>



<h3>
	Select a table check:
</h3>

<form action="change_table_check_panel.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT t.table_id, r.check_id
FROM table_entity t
JOIN receives r ON t.table_id = r.table_id;";

$myresult = mysqli_query($db, $sql_command);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$userID = $id_rows['table_id'];
	$check_id = $id_rows['check_id'];
	
	echo "<option value=$check_id>". "#" . $userID. " ". " | ".$check_id . "</option>";
  
  
}

?>
</select>

<button>SELECT</button>
</form>
