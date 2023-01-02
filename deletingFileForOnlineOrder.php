<?php 

include "config.php";

if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];
echo $selection_id;
$sql_statement = "UPDATE receives_online
				SET completed = 1
				WHERE check_id = $selection_id;";

$result = mysqli_query($db, $sql_statement);


header('Location: ' . $_SERVER['HTTP_REFERER']);

}

else
{

	echo "The form is not set.";

}

?>