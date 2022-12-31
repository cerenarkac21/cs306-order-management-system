<head>
    <link rel="stylesheet" href="style.css">
    </head>


    <div class="navbar">
            <a href="waiter_insertion.php">INSERT WAITER</a>
            <a href="delete_waiter.php">DELETE WAITER</a>
            <a href="update_waiter.php">UPDATE PASSWORD</a>
            <a href="adminHome.php">GO BACK TO ADMIN PAGE</a>
          </div>

<?php 

include "config.php";

include "list_waiter.php";

?>
<h4>Please choose which waiter to delete:</h4>

<form action="deletingFileForWaiter.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT * FROM waiter";

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