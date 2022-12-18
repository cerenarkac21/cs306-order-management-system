

<?php 

include "config.php";
include "list_tables.php";

$tableID = $_GET['table_id'];
if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];
echo $selection_id;
$sql_statement = "UPDATE table_entity SET occupancy=1 WHERE table_id=$selection_id";

$result = mysqli_query($db, $sql_statement);



header ("Location: add_order_panel.php?table=$selection_id");

}

else
{

	echo "The form is not set.";

}

?>
