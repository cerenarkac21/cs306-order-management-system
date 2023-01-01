<head>
    <link rel="stylesheet" href="style.css">
    </head>


    <div class="navbar">
            <a href="courier_insertion.php">INSERT COURIER</a>
            <a href="delete_courier.php">DELETE COURIER</a>
            <a href="update_courier.php">UPDATE PASSWORD</a>
            <a href="adminHome.php">GO BACK TO ADMIN PAGE</a>
          </div>


<?php 

include "config.php";

include "list_courier.php";

?>
<h4>Please choose which courier to delete:</h4>

<form action="deletingFileForCourier.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT courier_id, courier_name_surname FROM courier";

$myresult = mysqli_query($db, $sql_command);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$courier_id = $id_rows['courier_id'];
	$courier_name_surname = $id_rows['courier_name_surname'];
	echo "<option value=$courier_id>". "#" . $courier_id. " " . $courier_name_surname . "</option>";
}

?>
</select>

<button>DELETE</button>
</form>