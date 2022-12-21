

<?php 

include "config.php";
include "list_tables.php";

$tableID = $_GET['table_id'];
if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];
$sql_statement = "INSERT INTO have (table_id, reservation_id)
				   SELECT te.table_id, re.reservation_id
				   FROM table_entity te, reservation re
				  WHERE te.table_id = re.assigned_table AND re.reservation_id = (SELECT MAX(reservation_id) FROM reservation);
				  
";

/*
$stmt = $conn->prepare("SELECT * FROM users WHERE first_name = ? AND last_name = ?");
$stmt->bind_param("ss", $first_name, $last_name);;*/

$result = mysqli_multi_query($db, $sql_statement);

}

else
{

	echo "The form is not set.";

}

?>
