
<?php 

include "config.php";
include "list_tables.php";

if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];
echo $selection_id;
$sql_statement = "UPDATE table_entity SET occupancy=1 WHERE table_id=$selection_id";

$result = mysqli_query($db, $sql_statement);

header ("Location: tables.php");

}

else
{

	echo "The form is not set.";

}

?>