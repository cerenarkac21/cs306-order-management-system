

<?php 

include "config.php";
include "list_tables.php";

$tableID = $_GET['table_id'];
if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];
$sql_statement = "INSERT INTO Check_entity (delivery_type) VALUES ('in-cite');
				  UPDATE table_entity SET occupancy=1 WHERE table_id=$selection_id;
				  INSERT INTO receives (table_id, check_id)
				   SELECT te.table_id, ce.check_id
				   FROM table_entity te, Check_entity ce
				  WHERE te.table_id = $selection_id AND ce.check_id = (SELECT MAX(check_id) FROM Check_entity);
				  
";

/*
$stmt = $conn->prepare("SELECT * FROM users WHERE first_name = ? AND last_name = ?");
$stmt->bind_param("ss", $first_name, $last_name);;*/

$result = mysqli_multi_query($db, $sql_statement);


header ("Location: add_order_panel.php?table=$selection_id");


}

else
{

	echo "The form is not set.";

}

?>
