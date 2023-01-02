<head>
    <link rel="stylesheet" href="style.css">
    </head>

<?php 


include "waiterNavbar.php";
include "config.php";

include "menu.php";


?>

<h4>Please choose a food category:</h4>

<form action="list_foods_select_cat_waiter.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT DISTINCT fcategory FROM foods";


$myresult = mysqli_query($db, $sql_command);
#echo $myresult;


while($id_rows = mysqli_fetch_assoc($myresult))
{
	
	$fcategory = $id_rows['fcategory'];
	echo "<option value=\"$fcategory\">$fcategory</option>";
}

?>
</select>

<button>FILTER</button>
</form>