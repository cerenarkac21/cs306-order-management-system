<head>
    <link rel="stylesheet" href="style.css">
    </head>


<?php include "navbar.php";?>

<?php 

include "config.php";

include "list_waiter.php";

?>
<h4>Please choose which food to delete:</h4>

<form action="deletingFileForWaiter.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT waiter_id, waiter_name_surname FROM waiter";

$myresult = mysqli_query($db, $sql_command);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$waiter_id = $id_rows['waiter_id'];
	$waiter_name_surname = $id_rows['waiter_name_surname'];
	echo "<option value=$waiter_id>". "#" . $waiter_id. " " . $waiter_name_surname . "</option>";
}

?>
</select>

<button>DELETE</button>
</form>