<?php 

include "config.php";

$tableID = $_GET['userID'];
if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];
$sql_statement = "INSERT INTO Check_entity (delivery_type) VALUES ('online');
				  UPDATE online_customer SET waiting_food=1 WHERE userID=$selection_id;
				  INSERT INTO receives_online (userID, check_id)
				   SELECT te.userID, ce.check_id
				   FROM userID te, Check_entity ce
				  WHERE te.userID = $selection_id AND ce.check_id = (SELECT MAX(check_id) FROM Check_entity);
				  
";

/*
$stmt = $conn->prepare("SELECT * FROM users WHERE first_name = ? AND last_name = ?");
$stmt->bind_param("ss", $first_name, $last_name);;*/

$result = mysqli_multi_query($db, $sql_statement);


<<<<<<< Updated upstream
header ("Location: add_order_panel.php?table=$selection_id");
=======
header ("Location: add_online_order_panel.php?onlinecustomer=$selection_id");
>>>>>>> Stashed changes


}

else
{

	echo "The form is not set.";

}

?>
