<head>
    <link rel="stylesheet" href="style.css">
    </head>



<?php 

include "config.php";
include "courierNavbar.php";
include "list_online_orders.php";

?>
<h4>Please choose which order to delete:</h4>

<form action="deletingFileForOnlineOrder.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT * FROM match_with";

$myresult = mysqli_query($db, $sql_command);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$courier_id = $id_rows['courier_id'];
	$check_id = $id_rows['check_id'];
	echo "<option value=$check_id>". "#" . $courier_id. " " . $check_id . "</option>";
}

?>
</select>

<button>DELETE</button>
</form>