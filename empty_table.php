
<?php 

include "config.php";
include "list_tables.php";

if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];
echo $selection_id;
$sql_statement = "UPDATE table_entity SET occupancy=0 WHERE table_id=$selection_id;
                  DELETE FROM orders
                  WHERE check_id IN (SELECT check_id FROM receives WHERE table_id = $selection_id);
                  DELETE FROM receives WHERE table_id=$selection_id;
                  ";

$result = mysqli_multi_query($db, $sql_statement);

header ("Location: tables.php");

}

else
{

	echo "The form is not set.";

}

?>