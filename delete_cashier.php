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

include "list_cashier.php";

?>
<h4>Please choose which food to delete:</h4>

<form action="deletingFileForCashier.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT cashier_id, cashier_name_surname FROM cashier";

$myresult = mysqli_query($db, $sql_command);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$cashier_id = $id_rows['cashier_id'];
	$cashier_name_surname = $id_rows['cashier_name_surname'];
	echo "<option value=$cashier_id>". "#" . $cashier_id. " " . $cashier_name_surname . "</option>";
}

?>
</select>

<button>DELETE</button>
</form>