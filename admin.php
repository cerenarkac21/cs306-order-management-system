<head>
    <link rel="stylesheet" href="style.css">
    </head>


<?php include "navbar.php";?>

<?php 

include "config.php";

include "list_foods.php";

?>
<h4>Please choose which food to delete:</h4>

<form action="delete.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT fid, fname FROM foods";

$myresult = mysqli_query($db, $sql_command);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$fid = $id_rows['fid'];
	$fname = $id_rows['fname'];
	echo "<option value=$fid>". "#" . $fid. " " . $fname . "</option>";
}

?>
</select>

<button>DELETE</button>
</form>